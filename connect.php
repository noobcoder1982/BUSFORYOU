<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "busdata";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
date_default_timezone_set("Asia/Calcutta");
if (!$conn == true) {
    echo "Database Error!";
}