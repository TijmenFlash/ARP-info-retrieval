<?php

// $dbhost = 'db.ibewust.nl';
// $dbuser = 'md399405db363437';
// $dbpass = 'dXeTXDsW';
// $db = 'md399405db363437';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'arp_ir';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

mysqli_select_db($conn, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>