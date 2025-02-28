<?php
include 'db_config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $waste_type = $_POST['waste_type'];
    $location = $_POST['location'];

    $sql = "INSERT INTO waste_requests (user_id, waste_type, location) VALUES ('$user_id', '$waste_type', '$location')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Waste Pickup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>New Waste Pickup Request</h2>
        <form action="" method="post">
            <input type="text" name="waste_type" placeholder="Waste Type (Plastic, Organic, etc.)" required>
            <input type="text" name="location" placeholder="Your Address / Location" required>
            <button type="submit">Submit Request</button>
        </form>
    </div>
</body>
</html>
