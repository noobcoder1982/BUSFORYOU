<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "busdata";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
date_default_timezone_set("Asia/Calcutta");
if (!$conn == true) {
    echo "Database Error!";
<<<<<<< HEAD
}

=======
}
>>>>>>> 5ae82c333951c542368ee51d97c34a2a9bcab1c7
