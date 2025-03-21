<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="functions.php" method="post">
        <label for="name">Enter Name : </label>
        <input type="text" name="name"><br>
        <label for="age">Enter Age : </label>
        <input type="number" name="age"><br>
        <input type="submit" name="Enter">
    </form>
</body>

</html>
<?php
// functions.php
function wish($names, $age)
{
    echo "Happy Birthday {$names} !!! <br>";
    echo "Happy Birthday to you <br>";
    echo "You are {$age} years old today. <br>";
}
$name = $_POST['name'];
$age = $_POST['age'];

if (!empty($_POST["age"])) {
    wish($name, $age);
}
