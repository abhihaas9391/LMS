<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];



    $reset_link = "http://yourdomain.com/reset_password.php?email=" . urlencode($email) . "&token=" . urlencode("example_token");

    mail($email, "Password Reset", "Click on this link to reset your password: " . $reset_link);

    echo "A password reset link has been sent to your email address.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body  >
    <h2>Forgot Password</h2>
    <form method="post" action="forgot_password.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
