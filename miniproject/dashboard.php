<?php include 'header.php'; ?>
<h2 style="margin-left: 1%;">Dashboard</h2>

<div class="pricing-card">
    <h3>Pricing Info</h3>
    <p>Charges: ₹10 per hour</p>
    <p>Minimum Charge: ₹15</p>
</div>

<a href="add_vehicle.php">Register Vehicle</a> | <a href="start_parking.php">Start Parking</a> | <a href="end_parking.php">End Parking</a>
<h3>Your Vehicles</h3>
<ul>
    <?php
    $result = $conn->query("SELECT * FROM vehicles WHERE user_id = $user_id");
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['license_plate'] . " - " . $row['model'] . "</li>";
    }
    ?>
</ul>

<h3>Parking History</h3>
<ul>
    <?php
    $query = "SELECT * FROM parking_sessions ps JOIN vehicles v ON ps.vehicle_id = v.id WHERE v.user_id = $user_id ORDER BY ps.start_time DESC";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['license_plate'] . ": " . $row['start_time'] . " - " . ($row['end_time'] ? $row['end_time'] : "In Progress") . " | Fee: &#8377;" . $row['fee'] . "</li>";
    }
    ?>
</ul>
<?php include 'footer.php'; ?>