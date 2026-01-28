<?php

session_start();
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;


$db_host = getenv('DB_HOST') ?: "localhost";
$db_user = getenv('DB_USER') ?: "root";
$db_pass = getenv('DB_PASS') ?: "";
$db_name = getenv('DB_NAME') ?: "Hotelreservation";


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$check_db = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'");
if (mysqli_num_rows($check_db) == 0) {
    $create_db = "CREATE DATABASE IF NOT EXISTS $db_name";
    if (mysqli_query($conn, $create_db)) {
        mysqli_select_db($conn, $db_name);
        $create_table = "CREATE TABLE IF NOT EXISTS users (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            role ENUM('admin', 'user') DEFAULT 'user',
            verified TINYINT(1) NOT NULL DEFAULT 0,
            verification_code VARCHAR(6) DEFAULT NULL,
            code_expires_at DATETIME DEFAULT NULL,
            created_at DATETIME NOT NULL,
            last_login DATETIME DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        if (mysqli_query($conn, $create_table)) {
            $admin_password = password_hash('admin123', PASSWORD_DEFAULT);
            $insert_admin = "INSERT INTO users (name, email, password, role, verified, created_at) VALUES 
                ('Admin User', 'admin@example.com', '$admin_password', 'admin', 1, NOW())";
            mysqli_query($conn, $insert_admin);
        }
    }
}


if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error_message = "Email and password are required";
    } else {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['logged_in'] = true;

                $update_query = "UPDATE users SET last_login = NOW() WHERE id = " . $user['id'];
                mysqli_query($conn, $update_query);


                header("Location: dashboard.php" . ($user['role'] == 'admin' ? "?view=admin" : ""));
                exit;
            } else {
                $error_message = "Invalid password";
            }
        } else {
            $error_message = "Email not found";
        }
    }
}


if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be at least 6 characters long";
    } else {
        $check_query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Email already exists";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Removed verification code logic
            // Directly insert as verified user
            $insert_query = "INSERT INTO users (name, email, password, role, verified, created_at) 
                           VALUES ('$name', '$email', '$hashed_password', 'user', 1, NOW())";

            if (mysqli_query($conn, $insert_query)) {
                // Auto login after registration
                $_SESSION['user_id'] = mysqli_insert_id($conn);
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_role'] = 'user';
                $_SESSION['logged_in'] = true;
                
                header("Location: dashboard.php");
                exit;
            } else {
                $error_message = "Registration failed: " . mysqli_error($conn);
            }
        }
    }
}

// Verification logic removed
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$view = isset($_GET['view']) ? $_GET['view'] : ($is_logged_in ? 'dashboard' : 'login');
?>
