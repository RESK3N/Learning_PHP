<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form2.php" method="post">
        <label for="quantity">Enter Quantity : </label><br>
        <input type="number" id="quantity" name="quantity" required><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
<?php
// form2.php
$item = "Pizza ";
$price = 4.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;
echo "You ordered $quantity $item(s) for $price each. <br/>";
echo "The total cost is $total <br/>";
