<?php
session_start();

if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 10);
    $_SESSION['attempts'] = 0;
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['attempts']++;

    if ($_POST['guess'] == $_SESSION['random_number']) {
        $message = 'You win!';
        session_unset();
    } elseif ($_SESSION['attempts'] == 3) {
        $message = 'You lose! The number was ' . $_SESSION['random_number'];
        session_unset();
    } else {
        $message = 'Try again!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10;url=<?php echo $_SERVER['PHP_SELF']; ?>?timeout=1">
    <title>fourth website</title>
</head>
<body>

<?php
if (isset($_GET['timeout']) && $_GET['timeout'] == 1) {
    echo "Time's up! You lose!";
    session_unset();
} else {
?>

<form action="" method="post">
    Guess the number (1-10): <input type="number" name="guess" min="1" max="10" required>
    <input type="submit" value="Submit">
</form>
<p><?php echo $message; ?></p>
<p>Time left: <span id="timer">10</span> seconds</p>

<script>
    let timeLeft = 10;
    const timerElement = document.getElementById('timer');

    setInterval(() => {
        timeLeft -= 1;
        timerElement.textContent = timeLeft;

        if (timeLeft <= 0) {
            document.forms[0].submit();
        }
    }, 1000);
</script>

<?php
}
?>

</body>
</html>
