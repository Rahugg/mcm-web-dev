<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>third website</title>
</head>
<body>
    <?php
    $numbers = [10, 20, -5, 30, 45, 70]; // Sample array

    $containsNegative = false;
    foreach ($numbers as $num) {
        if ($num < 0) {
            $containsNegative = true;
            break;
        }
    }

    if ($containsNegative) {
        echo "YES";
    } else {
        echo "NO";
    }
    ?>
</body>
</html>
