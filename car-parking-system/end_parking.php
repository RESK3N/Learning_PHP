<?php include 'header.php';
include 'db.php';
?>
<h2>End Parking</h2>
<form action="end_parking_action.php" method="POST">
    <select name="session_id">
        <?php
        $query = "SELECT ps.id, v.license_plate FROM parking_sessions ps JOIN vehicles v ON ps.vehicle_id = v.id WHERE v.user_id = " . $_SESSION['user_id'] . " AND ps.end_time IS NULL";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['license_plate'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">End</button>
</form>
<?php include 'footer.php'; ?>