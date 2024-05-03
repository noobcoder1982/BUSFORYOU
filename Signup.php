<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize the input data
    // (You should implement validation and sanitization functions)

    // Generate a verification token (you can use a random string generator function)
    $verification_token = generateVerificationToken();

    // Save the user data and verification token to your database
    // (You should use prepared statements to prevent SQL injection)

    // Compose the email message
    $subject = "Email Verification";
    $message = "Dear $username,\n\n";
    $message .= "Thank you for registering. Please click on the following link to verify your email:\n";
    $message .= "http://yourwebsite.com/verify.php?token=$verification_token\n\n";
    $message .= "If you did not sign up for our website, please ignore this email.\n\n";
    $message .= "Regards,\nYour Website Team";

    // Send the email
    $headers = "From: yourwebsite@example.com" . "\r\n" .
               "Reply-To: yourwebsite@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($email, $subject, $message, $headers)) {
        echo "Verification email sent successfully. Please check your email inbox.";
    } else {
        echo "Failed to send verification email. Please try again later.";
    }
}

// Function to generate a random verification token
function generateVerificationToken() {
    return bin2hex(random_bytes(16)); // Generates a 32-character hexadecimal token
}
?>
