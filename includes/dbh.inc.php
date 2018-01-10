<?php
$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "admin";
$dbName = "bileezy";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

mysqli_set_charset($conn, 'utf8');


$root = "/bileezy";
?>
