<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third website</title>
</head>
<body>

<form method="POST">
    Enter numbers separated by commas: <input type="text" name="number_array" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number_array = explode(',', $_POST['number_array']);
    
    $containsNegative = false;
    foreach ($number_array as $num) {
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
}
?>

</body>
</html>
