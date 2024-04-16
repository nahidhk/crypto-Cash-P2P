@REM only local server

@echo off
REM Start PHP server
start "" php -S localhost:8000

REM Wait for PHP server to start (adjust the sleep time as needed)
timeout /t 5

REM Open the website
start "" "http://localhost:8000/"

REM Note: You can't directly set the home page of a browser using batch files.





@REM To set up PHP on your system, you typically need to follow these steps:

@REM Download PHP: Visit the official PHP website (https://www.php.net/downloads) and download the PHP installer suitable for your operating system. Choose the appropriate version and architecture (x86 or x64) based on your system.

@REM Install PHP: After downloading the installer, run it and follow the installation wizard instructions. During the installation process, you might be prompted to choose components to install. Ensure that the web server component is selected if you want to use PHP for web development.

@REM Configure PHP: Once PHP is installed, you may need to configure it according to your requirements. The main configuration file for PHP is php.ini. You can find this file in the PHP installation directory. Edit this file using a text editor to adjust settings such as extension_dir, error_reporting, display_errors, etc., based on your needs.

@REM Set Up Environment Variables (Optional): To run PHP from the command line globally, you can add the PHP installation directory to the system's PATH environment variable. This step allows you to run PHP commands from any directory in the command prompt or terminal.

@REM Test PHP Installation: After installation and configuration, you can verify if PHP is properly installed by opening a command prompt or terminal and running the following command:

@REM bash
@REM Copy code
@REM php -v
@REM This command should display the PHP version installed on your system along with other details.

@REM Start Using PHP: Once PHP is installed and configured, you can start using it to develop web applications or run PHP scripts from the command line.

@REM Following these steps should help you set up PHP on your system. If you encounter any issues during the installation or configuration process, you can refer to the PHP documentation or seek assistance from online communities.
