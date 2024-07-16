<?php
session_start();
include("config.php");

if (!isset($_SESSION['loggedInUserId'])) {
    header('location: index.php');
    exit();
}

$courseId = $_GET['courseid'];
$courseTitle = urldecode($_GET['coursetitle']);
$coursePrice = $_GET['courseprice'];
$loggedInUserId = $_SESSION['loggedInUserId'];
$loggedInUserName = $_SESSION['loggedInUserName'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Educamp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="boxs form-box">
            <h2>Payment</h2>
            <form action="process_payment.php" method="post">
                <div class="field input">
                    <label for="cardno">Card Number</label>
                    <input type="text" name="cardno" id="cardno" required>
                </div>
                <div class="field input">
                    <label for="name">Name on Card</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="field input">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" value="<?php echo $coursePrice; ?>" readonly>
                </div>
                <input type="hidden" name="course_id" value="<?php echo $courseId; ?>">
                <input type="hidden" name="course_title" value="<?php echo $courseTitle; ?>">
                <input type="hidden" name="user_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="user_name" value="<?php echo $loggedInUserName; ?>">
                <div class="field">
                    <input type="submit" class="button" name="submit" value="Pay">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
