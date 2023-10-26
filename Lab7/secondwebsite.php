<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second website</title>
</head>

<body>
    <?php
    $day = 4; 
    
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
    ?>

</body>

</html>