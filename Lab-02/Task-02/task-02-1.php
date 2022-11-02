<html>
<head>
    <style>
        td {
            width: 300px;
            height: 100px;
            text-align: center;
        }
        table {
            border-collapse: collapse;
        }
        table, td {
            border: black solid 3px;
        }
    </style>
</head>
<body>
<?php
 echo createTable(5, 4);
?>
</body>
</html>

<?php
function createTable($row, $col)
{
    $table = '<table>';
    for($i = 0; $i < $row; $i++) {
        $table .= '<tr>';
        for($j = 0; $j < $col; $j++) {
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            $table .= "<td style='background-color:rgb($red, $green, $blue);' >$red $green $blue</td>";
        }
        $table .= '</tr>';
    }
    return $table .= '</table>';
}
?>

