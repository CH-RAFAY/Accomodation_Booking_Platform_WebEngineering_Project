# How to Deploy to Vercel (or other platforms)

Since this is a PHP + MySQL application, deploying to Vercel requires some specific configuration because Vercel is designed for static sites and serverless functions, not traditional PHP hosting.

## Option 1: Vercel (Advanced)
If you really want to use Vercel, you need two things:
1.  **A Cloud Database:** Vercel does not host databases. You need a remote MySQL database.
2.  **Configuration:** I have added a `vercel.json` file to the project to handle PHP files.

### Steps:
1.  **Get a Database:** Sign up for a free MySQL database at [Aiven](https://aiven.io/), [PlanetScale](https://planetscale.com/), or [Railway](https://railway.app/).
2.  **Get Credentials:** Note down your `Host`, `User`, `Password`, and `Database Name`.
3.  **Upload to GitHub:** Push this project to a GitHub repository.
4.  **Import to Vercel:**
    *   Go to Vercel Dashboard -> Add New -> Project -> Import from GitHub.
    *   **Environment Variables:** In the project settings, add the following variables with your database details:
        *   `DB_HOST`
        *   `DB_USER`
        *   `DB_PASS`
        *   `DB_NAME`
5.  **Deploy:** Vercel will build the project using the configuration I added.

## Option 2: Railway (Recommended for PHP)
[Railway.app](https://railway.app/) is much better suited for this project because it supports PHP and MySQL natively.

1.  Upload code to GitHub.
2.  Login to Railway.
3.  Click "New Project" -> "Deploy from GitHub repo".
4.  Right click on the canvas -> "New" -> "Database" -> "MySQL".
5.  Connect the two services (Variables are usually auto-injected, or you can copy them manually).

## Option 3: Traditional Hosting (Easiest)
Use any standard PHP hosting provider like Hostinger, Bluehost, or 000webhost (free).
1.  Upload files to `public_html`.
2.  Create a MySQL database in their control panel.
3.  Import `database_setup.sql`.
4.  Edit `inc/init.php` manually with the credentials if environment variables aren't supported.
