<?php
include 'db_config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM waste_requests WHERE user_id='$user_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <p align ="center"> -->
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
    <nav>  
<body>
    <nav>
    <header>Waste Collection Requests<header>
    <nav>
        <a href="request.php">New Request<a>
    <nav>
    <table>
    
        <tr>
            <th>Type</th>
            <th>Location</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['waste_type'] ?></td>
            <td><?= $row['location'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
