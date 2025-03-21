<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form method="post" action="credit.php">
        <input type="radio" name="creditcard" value="Rupay">
        <label for="creditcard">Rupay</label><br>
        <input type="radio" name="creditcard" value="MasterCard">
        <label for="creditcard">MasterCard</label><br>
        <input type="radio" name="creditcard" value="Visa">
        <label for="creditcard">Visa</label><br>
        <input type="radio" name="creditcard" value="American Express">
        <label for="creditcard">American Express</label><br>
        <input type="submit" name="confirm" value="Confirm">

    </form> -->
    <form action="credit.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">
        <label for="pizza">Pizza</label><br>
        <input type="checkbox" name="food[]" value="burger">
        <label for="burger">Burger</label><br>
        <input type="checkbox" name="food[]" value="hotdog">
        <label for="hotdog">Hotdog</label><br>
        <input type="checkbox" name="food[]" value="taco">
        <label for="taco">Tacos</label><br>
        <input type="submit" name="select">
    </form>
</body>

</html>
<?php
// credit.php
// if (isset($_POST["confirm"]) && isset($_POST["creditcard"])) {
//     $creditcard = $_POST["creditcard"];
//     echo "You have selected: " . $creditcard;
// }

// if (isset($_POST["select"])) {
$food = $_POST["food"];
//     foreach ($food as $foods) {
//         echo "<br>You have selected: " . $foods;
//     }
// }




switch ($food) {
    case 'pizza':
        echo "<br>You have selected Pizza.";
        break;
    case 'burger':
        echo "<br>You have selected Burger.";
        break;
    case 'hotdog':
        echo "<br>You have selected Hotdog.";
        break;
    case 'taco':
        echo "<br>You have selected Tacos.";
        break;
    default:
        echo "<br>You have not selected any food.";
        break;
}
