<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_hostname = "127.0.0.1";
        $db_username = "root";
        $db_password = "";
        $db_name = "project";

        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
        if (!$conn) {
            echo "Connection failed: " . mysqli_connect_error();
            exit;
        }

        $name = $_POST['name'] ?? '';
        $password = $_POST['password'] ?? '';

        $sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
            exit;
        }

        $row = mysqli_fetch_assoc($result);
        if ($row) {
            echo "Hello " . $row['name'] . "<br/>";

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];

            // Redirect to dashboard.php after successful login
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Login Failed<br/>";
        }

        mysqli_close($conn);
    }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="login.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <form action="login.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" name="name" required>
            <i class="fa fa-user"></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" required>
            <i class="fa fa-lock"></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
            <p>Don't have an account?</p>
            <a href="register.php">Register</a>
        </div>
    </form>
</div>
</body>
</html>