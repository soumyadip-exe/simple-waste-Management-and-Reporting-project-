<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 🛠️ Debugging: Check if POST is received
    if (!isset($_POST['email'])) {
        echo "Error: Email is missing!";
        exit();
    }

    $email = trim($_POST['email']);

    // Query to check if the email exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // ✅ Start session and store user details
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // ✅ Redirect user based on role
        if ($user['role'] == 'admin') {
            header("Location: dashboard.php");
        } else {
            header("Location: dashboard.php");
        }
        exit();
    } else {
        $error_message = "❌ No user found with this email!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>

        <form action="" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
