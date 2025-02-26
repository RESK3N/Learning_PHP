<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="get">
        <label for="name">Username: </label>
        <input type="text" name="name" id="name"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Log In">

    </form>
</body>

</html>
<?php
// This is the form.php file
echo $_GET["name"] . "<br>";
echo $_GET["password"];
/* The get method has no security as the url 
will show all the information*/


?>