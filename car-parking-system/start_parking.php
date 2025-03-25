<?php include 'header.php';
include 'db.php';
?>
<h2>Start Parking</h2>
<form action="start_parking_action.php" method="POST">

    <select name="vehicle_id">
        <?php
        $result = $conn->query("SELECT * FROM vehicles WHERE user_id = " . $_SESSION['user_id']);
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['license_plate'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">Start</button>
</form>

<?php include 'footer.php'; ?>