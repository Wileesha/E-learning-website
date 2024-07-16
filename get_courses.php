<?php
include 'config.php';

$result = $con->query("SELECT * FROM courses");
$courses = [];

while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}

echo json_encode($courses);
?>