

<?php
$host = 'testice.database.windows.net';
$username = 'tanvir';
$password = 'Amipagla99';
$db_name = 'LoginSystem';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'testice.database.windows.net', 'tanvir', 'Amipagla99', 'LoginSystem', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>

