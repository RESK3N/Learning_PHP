<?php
include 'db.php';
$license = $_POST['license_plate'];
$model = $_POST['model'];
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("INSERT INTO vehicles (user_id, license_plate, model) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $license, $model);
$stmt->execute();
header("Location:dashboard.php");
