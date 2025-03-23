<?php
include("header.html");
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
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>
<?php
$pass = "passw";
$hash = password_hash($pass, PASSWORD_DEFAULT);
if (isset($_POST["submit"])) {
    if (empty($_POST["username"])) {
        echo "Please enter your username";
    } else if (empty($_POST["password"])) {
        echo "Please enter your password";
    } else {
        $_SESSION["password"] = $_POST["password"];
        if (password_verify($_SESSION["password"], $hash)) {
            $_SESSION["username"] = $_POST["username"];
            header("Location: home.php");
        } else {
            echo "Invalid Password";
        }
    }
}
// echo "<br>" . $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";
include("footer.html");
?>