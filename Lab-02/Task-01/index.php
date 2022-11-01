<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: solid 1px black;
        }

        tr:first-child {
            background-color: yellow;
        }

        input[type="submit"] {
            width: 100px;
        }

        input {
            margin: 10px;
        }
        h1 {
            color: red;
        }
    </style>
</head>
<body>
<form>
    <table>
        <tr>
            <th>x^y</th>
            <th>x!</th>
            <th>my_tg(x)</th>
            <th>sin(x)</th>
            <th>cos(x)</th>
            <th>tg(x)</th>
            <th>x+y</th>
            <th>x-y</th>
            <th>x*y</th>
            <th>x/y</th>
            <th>average(x,y)</th>
        </tr>
        <tr>
            <?php

            $numX = $_GET["numX"];
            $numY = $_GET["numY"];

            if (is_numeric($numX) && is_numeric($numY))
                echo('<td>' . powImport($numX, $numY) . '</td>' .
                    '<td>' . factorial($numX) . '</td>' .
                    '<td>' . my_tg($numX) . '</td>' .
                    '<td>' . sin($numX) . '</td>' .
                    '<td>' . cos($numX) . '</td>' .
                    '<td>' . tan($numX) . '</td>' .
                    '<td>' . ($numX + $numY) . '</td>' .
                    '<td>' . ($numX - $numY) . '</td>' .
                    '<td>' . ($numX * $numY) . '</td>' .
                    '<td>' . ($numY != 0 ? $numX / $numY : 'На нуль ділити не можна!') . '</td>' .
                    '<td>' . average($numX, $numY) . '</td>');
            ?>
        </tr>
    </table>
    <div>
        <input type="number" name="numX">
        <input type="number" name="numY">
        <input type="submit" value="=">
    </div>
</form>
</body>
</html>

<?php
function powImport($num, $exponent)
{
    $result = 1;
    if ($exponent > 0) {
        $temp = $exponent;
        while ($temp) {
            $result *= $num;
            $temp--;
        }
        return $result;
    } else if ($exponent < 0) {
        return 1 / powImport($num, $exponent * -1);
    } else return 1;
}

function factorial($num)
{
    if ($num < 0) {
        return factorial($num * -1) * -1;
    }
    $result = 1;
    while ($num) {
        $result *= $num;
        $num--;
    }
    return $result;
}

function my_tg($num)
{
    return sin($num) / cos($num);
}

function average($numX, $numY)
{
    return ($numX + $numY) / 2;
}

?>