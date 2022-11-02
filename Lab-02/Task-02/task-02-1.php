<html>
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
            $table .= '<td>777</td>';
        }
        $table .= '</tr>';
    }
    return $table .= '</table>';
}
?>

