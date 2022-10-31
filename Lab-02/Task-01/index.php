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

        form {
            display: flex;
        }

        input[type="submit"] {
            width: 100px;
        }

        input {
            margin: 10px;
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
            echo '<td>' . powImport(2, -4) . '</td>';
            ?>
        </tr>
    </table>
    <div>
        <input type="number" name="numX">
    </div>
    <div>
        <input type="number" name="numY">
    </div>
    <div>
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
    } else if ($exponent < 0)  {
        return 1 / powImport($num, $exponent * -1);
    } else return 1;
}

?>