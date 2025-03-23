<?php
include("header.html");
setcookie("food", "pizza", time() + (86400 * 2), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Welcome to the Home page</h4>
    <p>This this the homepage of our website </p>
    <form method="post" action="home.php">
        <input type="submit" value="Logout" name="logout" />
    </form>
</body>

</html>
<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header("location: login.php");
}
include("footer.html"); ?>