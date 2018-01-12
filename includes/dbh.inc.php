<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Bileezy";


$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_errno) {
    die('Connect Error: ' . $conn->connect_errno);
}
$conn->set_charset("utf8");

$root = "";
?>
