<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'bukutamu';
$dbpass = 'Bukutamutugaspamujib1!';
$dbname = 'dane';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>