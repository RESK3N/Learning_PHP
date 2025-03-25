<!DOCTYPE html>
<html>

<head>
    <title>Car Parking System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="index.php">Home</a> |
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php">Dashboard</a> |
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Register</a> |
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
    <hr>