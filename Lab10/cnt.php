<?php
session_start();

if (!isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] = 0;
    $message = "Страница еще не обновлялась.";
} else {
    $_SESSION['page_count']++;
    $message = "Страница была обновлена {$_SESSION['page_count']} раз(а).";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счетчик обновления страницы</title>
</head>
<body>
    <h1>Счетчик обновления страницы</h1>
    <p><?php echo $message; ?></p>
    <a href='./something.php'> Зайдем обратно в something.php</a><br>
</body>
</html>
