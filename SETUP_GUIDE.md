# Setup Guide for Rest Riser

This project requires **PHP** and **MySQL** to run. Since these are not installed in the current environment, please follow the steps below to set up the project on your local machine.

## Prerequisites

1.  **XAMPP** (or WAMP/MAMP): A software stack that includes Apache (Web Server), MySQL (Database), and PHP.
    *   Download and install from: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

## Installation Steps

1.  **Move Project Files:**
    *   Copy the entire `Accomodation_Booking_Platform_WebEngineering_Project` folder to your XAMPP `htdocs` directory.
    *   Usually located at `C:\xampp\htdocs\`.
    *   Rename the folder to `hotel` (optional, for easier access).

2.  **Start Servers:**
    *   Open **XAMPP Control Panel**.
    *   Start **Apache** and **MySQL**.

3.  **Setup Database:**
    *   Open your browser and go to `http://localhost/phpmyadmin`.
    *   Click on **Import** tab.
    *   Choose the file `database_setup.sql` located in the project root.
    *   Click **Go** to import the database structure and default data.

4.  **Run the Project:**
    *   Open your browser and visit: `http://localhost/Accomodation_Booking_Platform_WebEngineering_Project/` (or `http://localhost/hotel/` if you renamed it).

## Admin Credentials

*   **Admin Panel:** `http://localhost/.../admin/`
*   **Username:** `admin`
*   **Password:** `12345`

## Troubleshooting

*   **Database Connection Error:** Check `admin/inc/db_config.php` and `inc/header.php` to ensure the username/password matches your XAMPP MySQL settings (Default is usually `root` with no password).
