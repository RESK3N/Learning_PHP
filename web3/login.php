<?php
include("header.html");
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
    <h4> Welcome back ! Sign In</h4>
    <fieldset>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="3"><br>
            <input type="submit" value="Sign In">
            <a href="register.php">Create an account</a>
        </form>
    </fieldset>
</body>

</html>
<?php
//login panel
include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_SESSION["username"])) {
        echo "You are already logged in !!<br>Please Logout before signing in";
    } else {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username)) {
            echo "Please enter username";
        } else if (empty($password)) {
            echo "Please enter password";
        } else {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    session_start();
                    $_SESSION["username"] = $username;
                    header("Location: home.php");
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "User not found";
            }
        }
    }
}

//logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: login.php");
}



include("footer.html");
?>