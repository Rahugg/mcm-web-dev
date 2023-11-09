<?php
require_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO "user" (email, password) VALUES (?, ?)');

    $stmt->execute([$email, $password]);

    echo "Registration successful. <a href='login.php'>Login here</a>";
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h2>Register</h2>
    <form method="POST" action="register.php">
        <label>Email:</label>
        <input type="text" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>