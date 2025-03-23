<?php
include("header.html");
include("db.php");
include("register.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4> Welcome back ! Sign In</h4>
    <fieldset>
        <form action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Sign In">
            <a href="register.php">Create an account</a>
        </form>
    </fieldset>
</body>

</html>
<?php
//login panel


include("footer.html");
?>