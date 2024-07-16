<?php
session_start();
if (!isset($_SESSION['loggedInUserId'])) {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Success - Educamp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="boxs form-box">
            <h2>Enrollment Success</h2>
            <p>Thank you for enrolling in the course. You have successfully enrolled.</p>
            <a href="home.php" class="button">Go to Home</a>
        </div>
    </div>
</body>
</html>
