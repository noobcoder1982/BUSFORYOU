<?php
    session_start();

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "project";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>";

    $_SESSION['user_id']=$row['id'];
    $_SESSION['name']=$row['name'];

    //setcookie("user_id",$row['id'],time()+3600);
    //setcookie("name",$row['name'],time()+3600);

        ?>
        <a href="dashboard.php"></a>
        <a href="home.html">Home</a>
        <?php
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>
