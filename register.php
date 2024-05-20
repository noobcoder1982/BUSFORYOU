<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include "config.php";

if (isset($_POST['register'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password'])); // Note: MD5 is not recommended for password hashing

  $selectDatabse = "SELECT * FROM user WHERE email = '" . $email . "'";
  $selectResult = mysqli_query($conn, $selectDatabse);
  if (mysqli_num_rows($selectResult) > 0) {
    $selectRow = mysqli_fetch_assoc($selectResult);

    $status = $selectRow['status'];

    if ($status == 'active') {
      echo "<script>alert('Email already registered')</script>";
    }
  } else {
    $otp_str = str_shuffle("0123456789");
    $otp = substr($otp_str, 0, 5);

    $act_str = rand(100000, 10000000);
    $activation_code = str_shuffle("abcdefghijklmno" . $act_str);

    $sqlInsert = "INSERT INTO user (name, email, password, otp, activation_code, status) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', '" . $otp . "', '" . $activation_code . "', 'inactive')";
    $insertResult = mysqli_query($conn, $sqlInsert);

    if ($insertResult) {
      // Send verification email
      $mail = new PHPMailer;
      $mail->IsSMTP();
      $mail->Host = 'in-v3.mailjet.com';
      $mail->Port = 587;
      $mail->SMTPSecure = 'TLS';
      $mail->SMTPAuth = true;
      $mail->Username = 'lcw42014@gmail.com';
      $mail->Password = 'thisiswhyibombpeople';
      $mail->From = 'lcw42014@gmail.com';
      $mail->FromName = 'Busforyou';
      $mail->addAddress($email);
      $mail->isHTML(true);
      $mail->Subject = 'Verification code for verification of your email address';

      $message_body = '
            <p>To verify your email, Here is your code: <b> ' . $otp . '</b>.</p> 
            ';

      $mail->Body = $message_body;

      if ($mail->Send()) {
        echo '<script> alert("Please check your mailbox for verification code (make sure to look in spam folder)")</script>';
        header('location:email_verify.php?code=' . $activation_code);
      } else {
        $message = $mail->ErrorInfo;
        echo '<script>alert("Oops!! Something Went Wrong[failed to send verification email]")</script>';
      }

    } else {
      echo '<script>alert("Oops!! Something Went Wrong[failed to insert data]")</script>';
    }
  }
} 
else {

  $otp_str = str_shuffle("0123456789");
  $otp = substr($otp_str, 0, 5);

  $act_str = rand(100000, 10000000);
  $activation_code = str_shuffle("abcdefghijklmno" . $act_str);

  
  $mail = new PHPMailer;
  $mail->IsSMTP();
  $mail->Host = 'in-v3.mailjet.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'TLS';
  $mail->SMTPAuth = true;
  $mail->Username = 'lcw42014@gmail.com';
  $mail->Password = 'thisiswhyibombpeople';
  $mail->From = 'lcw42014@gmail.com';
  $mail->FromName = 'Busforyou';
  $mail->addAddress(@$email);
  $mail->isHTML(true);
  $mail->Subject = 'Verification code for verification of your email address';

  $message_body = '
          <p>To verify your email, Here is your code: <b> ' . $otp . '</b>.</p> 
          ';

  $mail->Body = $message_body;

  if ($mail->Send()) {
      $sqlInsert = "INSERT INTO user (name, email, password, otp, activation_code) VALUES ('" . $name . "', '" . $email . "', '" . $password . "', '" . $otp . "', '" . $activation_code . "',)";
      $insertResult = mysqli_query($conn, $sqlInsert);

      if ($insertResult) {
          echo '<script> alert("Please check your mailbox for verification code (make sure to look in spam folder)")</script>';
          header('location:email_verify.php?code=' . $activation_code);
      } else {
          echo '<script>alert("Oops!! Something Went Wrong[failed to insert data]")</script>';
      }

  } else {
      $message = $mail->ErrorInfo;
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>

<body>

  <div class="wrapper">
    <form action="register.php" method="post">
      <h1>Sign Up</h1>

      <input type="hidden" name="otp" value="<?php echo $otp; ?>" placeholder="Enter OTP" maxlength="6" required>
      <input type="hidden" name="activation_code" value="<?php echo $activation_code; ?>">

      <div class="input-box">
        <input type="text" placeholder="Full Name" autocomplete="off" name="name" required>
        <i class="fa fa-user"></i>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Email" autocomplete="off" name="email" required>
        <i class="fa fa-envelope"></i>
      </div>
      <div class="input-box">
        <input type="password" maxlength="16" placeholder="Password" name="password" required>
        <i class="fa fa-eye-slash" id="togglePassword"></i>
      </div>

      <button type="submit" name="register" value="Signup" class="btn" onclick="redirectToHomepage()">Sign Up</button>

      <div class="login-link">
        <p>Already have an account?</p>
        <a href="login.html">Login</a>
      </div>
    </form>
  </div>
  <script>
    function redirectToHomepage() {
      // Replace 'homepage.php' with the URL of your homepage
      window.location.href = 'index.php';
    }
  </script>
</body>

</html>