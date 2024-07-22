# WordPress First Plugin Development Practice

## 01. Local environment
The first step is to download the Apache and MySQL services to get PHP and relational database motor to work with WordPress.
A quick solution to get both (PHP and MySQL) installed at once with no pain, will be: XAMPP for Windows and/or MAMPP for MacOS devices.

Once XAMPP / MAMP is installed on your system you need to run both services: Apache and MySQL.

## 02. WordPress installation
The second step is to download WordPress latest version from it's official website: https://wordpress.org/download/

Once you got the .ZIP file with WordPress on it, you need to create a new directory under the "htdocs" folder from you XAMPP / MAMP main folder, it could be easly located into the local system's hard drive's root path.

Then you are going to decompress the .ZIP file with WordPress files on the root of your recently created folder, for this practice I'll be using: "wp-first-plugin" folder as the main WordPress folder.

Next, you are going to enter to the localhost direction from the address bar of a web explorer of your choice so the WordPress install first step page is displayed.

## 03. MySQL database creation
The third step consist on creating our MySQL database for WordPress to work with.
You can archive this by openning the PHPMyAdmin page from your XAMPP / MAMP main window.
One you get to the PHPMyAdmin page, you are going to click the "New" link above the tree structure on the left sidebar to create a new database.
The name of mine for this practice will be: "first_plugin" as database name.
Click on RUN / CONTINUE button to proceed with your database creation.

## 04. Linking WordPress with MySQL
Back to WordPress 2nd installation page / step, you are going to be asked for a database name, database user, database password, the database host and a table prefix.
For a local environment like this one you are going to input the following values:
- Database Name: first_plugin (change it for the name of your recently created database).
- Database User: root (default's XAMPP / MAMP user).
- Database Password: (no-password as default, so you can leave it empty).
- Database prefix: wp_ (you can use the default one).

If your database was created successfully and WordPress can access it by it's name and credentials, then the installation will proceed.
You will be asked for you new WordPress site's title, a username to access it as asdministrator and the password of your choice for this first user.
Once you covered all the requested data from the step-by-step WordPress installation, then you will be re-directed to login to the WordPress admin dashboard.

## 05. Wrapping up
Now you have a fresh WordPress installation from scratch over a local development environment to test plugin's development.