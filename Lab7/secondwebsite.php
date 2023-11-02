<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second website</title>
</head>

<body>

    <form method="POST">
        Enter a number for the day (1-7): <input type="number" name="day" min="1" max="7" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $day = $_POST['day'];
        
        switch ($day) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "It's a workday!";
                break;
            case 6:
            case 7:
                echo "It's a weekend!";
                break;
            default:
                echo "Unknown day";
        }
    }
    ?>

</body>

</html>
