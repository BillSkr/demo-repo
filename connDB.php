<?php

$servername = 'dns1.papaki.gr';
$username = 't182933skr';
$password = '';
$dbname = 'contact';

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} else {
    mysqli_set_charset($conn, 'utf8');
}

?>

