<?php
include 'db.php';
// Check if the vehicle already has an active session
// $check = $conn->query("SELECT * FROM parking_sessions WHERE vehicle_id = $vehicle_id AND end_time IS NULL");
// if ($check->num_rows > 0) {
//     echo "This vehicle already has an active parking session!";
//     exit();
// }
$vehicle_id = $_POST['vehicle_id'];
$conn->query("INSERT INTO parking_sessions (vehicle_id, start_time) VALUES ($vehicle_id, NOW())");
header("Location: dashboard.php");
