<?php
$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "admin";
$dbName = "bileezy";


$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_errno) {
    die('Connect Error: ' . $conn->connect_errno);
}
$conn->set_charset("utf8");

$root = "/bileezy";
?>
