<?php
include 'db.php';
$session_id = $_POST['session_id'];
$query = "UPDATE parking_sessions SET end_time = NOW(), fee = TIMESTAMPDIFF(HOUR, start_time, NOW()) * 2 WHERE id = $session_id";

// 5rs per hour , min 10
$query = "
    UPDATE parking_sessions 
    SET 
        end_time = NOW(), 
        fee = GREATEST(15, CEIL(TIMESTAMPDIFF(MINUTE, start_time, NOW()) / 60) * 10) 
    WHERE id = $session_id
";
$conn->query($query);
header("Location: dashboard.php");
.