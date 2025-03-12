<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="circle.php" method="get">
        <label for="radius">Enter radius of the circle :</label><br>
        <input type="number" id="radius" name="radius" required><br>
        <input type="submit" value="Calculate Area"><br>
    </form>
</body>

</html>
<?php
// form to calculate area of a circle
$radius = $_GET["radius"];
$area = pi() * pow($radius, 2);
echo "The area of the circle is: $area cm.";
?>