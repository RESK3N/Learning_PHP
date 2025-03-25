<?php include 'header.php'; ?>
<h2>Register Vehicle</h2>
<form action="add_vehicle_action.php" method="POST">
    <input type="text" name="license_plate" placeholder="License Plate" required><br>
    <input type="text" name="model" placeholder="Vehicle Model" required><br>
    <button type="submit">Add Vehicle</button>
</form>
<?php include 'footer.php'; ?>