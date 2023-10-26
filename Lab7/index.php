<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7</title>
    <style>
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 10px;
            text-align: center;
        }

        th {
            font-weight: bold;
            background-color: yellow;
        }
    </style>


</head>

<body>
    <table border="3">
        <?php
        $cols = 9;
        $rows = 9;

        for ($r = 1; $r <= $rows; $r++) {
            echo "<tr>";
            for ($c = 1; $c <= $cols; $c++) {
                if ($r == 1 || $c == 1) {
                    echo "<th>" . $r * $c . "</th>";
                } else {
                    echo "<td>" . $r * $c . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>