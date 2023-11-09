<!DOCTYPE html>
<html>
<head>
    <title>Вторая форма</title>
</head>
<body>
    <h1>Заполните форму:</h1>
    <form method="post" action="">
        <input type="text" name="first_name" placeholder="Имя">
        <input type="text" name="last_name" placeholder="Фамилия">
        <input type="password" name="password" placeholder="Пароль">
        <input type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <input type="submit" value="Отправить">
    </form>
    <a href="register.php">Зарегистрироваться на register.php</a>
</body>
</html>
