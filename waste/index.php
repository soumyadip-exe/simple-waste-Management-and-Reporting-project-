<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Waste Management System</h1>
        <p>Efficiently manage waste disposal requests and track progress in real-time.</p>
        <nav>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php" class="btn">Go to Dashboard</a>
            <a href="logout.php" class="btn btn-secondary">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn btn-secondary">Register</a>
        <?php endif; ?>
    </div>
</body>
</html>
