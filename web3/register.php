<?php include("header.html");
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Register Now</h4>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <!-- <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br> -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Register">
        <a href="login.php">Already have an account?</a>
    </form>
    </form>
</body>

</html>
<?php
// register panel
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username)) {
        echo "Please enter username";
    } elseif (empty($password)) {
        echo "Please enter password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";
        try {
            if (mysqli_query($conn, $sql)) {
                echo "You are now registered";
            }
        } catch (mysqli_sql_exception) {
            echo "That username is taken! Please try another one!";
        }
    }
}

include("footer.html");
?>