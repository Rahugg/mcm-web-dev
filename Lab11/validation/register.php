<?php
require_once 'db.php';
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password format (at least 6 characters)
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare('INSERT INTO "user" (email, password) VALUES (?, ?)');
        $stmt->execute([$email, $hashedPassword]);

        echo "Registration successful. <a href='login.php'>Login here</a>";
        header('Location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <h2>Register</h2>

    <?php
    if (!empty($errors)) {
        echo '<div style="color: red;">' . implode('<br>', $errors) . '</div>';
    }
    ?>

    <form method="POST" action="register.php">
        <label>Email:</label>
        <input type="text" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>
