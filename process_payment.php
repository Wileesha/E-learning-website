<?php
session_start();
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cardno = mysqli_real_escape_string($con, $_POST['cardno']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $courseId = mysqli_real_escape_string($con, $_POST['course_id']);
    $courseTitle = mysqli_real_escape_string($con, $_POST['course_title']);
    $userId = mysqli_real_escape_string($con, $_POST['user_id']);
    $userName = mysqli_real_escape_string($con, $_POST['user_name']);

    $query = "INSERT INTO enroll (courseid, userid, title, Username, amount) VALUES ('$courseId', '$userId', '$courseTitle', '$userName', '$price')";
    
    if (mysqli_query($con, $query)) {
        header('location: enrollment_success.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
