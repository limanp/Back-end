<?php include 'mathFunction.php'; ?>

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
        .input {
            display: flex;
            margin-top: 20px;
        }
        .input > div > div {
            padding-left: 100px;
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
    <div class="input">
        <div>
            <div>x</div>
            <input type="number" name="numX">
        </div>
        <div>
            <div>y</div>
            <input type="number" name="numY">
        </div>
        <div style="position: relative;"><input style="position: absolute; bottom: 0;" type="submit" value="="></div>
    </div>
</form>
</body>
</html>

