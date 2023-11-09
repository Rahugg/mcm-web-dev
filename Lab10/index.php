<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['country'])) {
        $_SESSION['country'] = $_POST['country'];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Выбор страны</title>
</head>
<body>
    <h1>Выберите вашу страну:</h1>
    <form method="post" action="index.php">
        <input type="text" name="country">
        <input type="submit" value="Сохранить">
    </form>
    <br>
    <a href="test.php">Перейти на страницу test.php</a>
    <br>
    <a href="register.php">Перейти на страницу register.php</a>
</body>
</html>
