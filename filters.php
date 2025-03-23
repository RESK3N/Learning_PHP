<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="filters.php" method="post">
        <label for="name">Username: </label>
        <input type="text" name="name" id="name"><br>
        <!-- <label for="email">Email Id: </label>
        <input type="text" name="email"><br> -->
        <!-- <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br> -->
        <label for="age">Enter age: </label>
        <input type="text" name="age"><br> <!-- text field in age allows all types of input -->
        <input type="submit" value="Log In">

    </form>
</body>

</html>
<?php
// // This is the form.php file
// // $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

// //FILTER_SANITIZE_SPECIAL_CHARS will filter spectial characters
// $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

// $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
// //FILTER_SANITIZE_NUMBER_INT will filter out numbers from any given input that has numbers

// $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
// //FILTER_SANITIZE_EMAIL will filter special characters that are not allowed in a email address

// // $age=$_POST['age'];
// // $name = $_POST['name'];
// // $pass = $_POST['password'];
// // $email=$_POST["email"];

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // only lets you enter if input is integer
echo "Hey, " . $name . "<br>";
// echo $pass . "<br>";
// echo "Your email id is : " . $email . "<br>";
if (empty($age)) {
    echo "Invalid age ! Please enter a valid age.";
} else
    echo "You are {$age} years old !!";

/* The get method has no security as the url 
will show all the information , use _POST method instead */

//<script>alert("You have been hacked");</script>
//some filters :- 
//sanitize
//FILTER_SANITIZE_SPECIAL_CHARS will filter spectial characters
//FILTER_SANITIZE_NUMBER_INT will filter out numbers from any given input that has numbers
//FILTER_SANITIZE_EMAIL will filter special characters that are not allowed in a email address
//vaildate
//FILTER_VALIDATE_INT will only let you enter if the input is purely integer 
//FILTER_VALIDATE_EMAIL will only let you enter if the input is a valid email address
?>