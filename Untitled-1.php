<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data here

    // Redirect to confirmation page
    header("Location: CheckAvailability.html");
    exit();
}
?>
<?php

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "project";
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

  

    $seat1=$_POST['s1'];


    $sql = "INSERT INTO silubus (`id`, `searno`) VALUES (null, '$seat1')";


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
    
    //echo "Registration successful";
    mysqli_close($conn);
?>
</body>
</html>