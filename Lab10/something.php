<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $login_time = isset($_SESSION['login_time']) ? $_SESSION['login_time'] : time();
    $elapsed_time = time() - $login_time;
    echo "Добро пожаловать!<br>";
    echo "Вы вошли на сайт " . $elapsed_time . " секунд назад.<br>";
    echo '<a href=\'./cnt.php\'> Давайте зайдем сюда</a><br>';
    echo '<a href="logout.php">Log out</a>';
} else {
    echo 'Вы не вошли на сайт. Пожалуйста, войдите:<br>';
    echo '<form method="post" action="login.php">';
    echo 'Логин: <input type="text" name="username"><br>';
    echo 'Пароль: <input type="password" name="password"><br>';
    echo '<input type="submit" value="Войти">';
    echo '</form>';
}
?>
