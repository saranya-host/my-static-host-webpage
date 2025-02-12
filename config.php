<?php
$servername = "sql102.infinityfree.com"; // Example: sql123.infinityfree.com
$username = "if0_38102438";
$password = "saranyaelaya";
$database = "if0_38102438_mplschool_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
