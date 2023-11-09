<?php
session_start();

$country = isset($_SESSION['country']) ? $_SESSION['country'] : 'Страна не выбрана';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Страна пользователя</title>
</head>
<body>
    <h1>Ваша страна:</h1>
    <p><?= $country ?></p>
    <br>
    <a href="index.php">Вернуться на страницу index.php</a>
    <br>
    <a href="email.php">Зайти на страницу email.php</a>
</body>
</html>
