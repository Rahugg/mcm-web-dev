<?php
session_start();

// Завершаем текущую сессию
session_destroy();

// Перенаправляем пользователя на главную страницу
header('Location: index.php');
?>
