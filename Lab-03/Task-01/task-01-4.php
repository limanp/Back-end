<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-01-4</title>
</head>
<body>
<h1>Кількість днів між датами</h1>
<?php
$date1 = "01-01-2003";
$date2 = "01-01-2000";
echo "Дата перша: $date1 || Дата друга: $date2<br>";
echo findDiff1($date1, $date2) . ' днів - перша функція<br>';
echo findDiff2($date1, $date2) . ' днів - друга функція';
?>
</body>
</html>

<?php
//Я зробив два варіанти виконання програмного коду

function findDiff1($dateStr1, $dateStr2) :int // Перший варіант
{
    $date1 = date_create($dateStr1);
    $date2 = date_create($dateStr2);
    $diff = $date1 ->diff($date2);
    return $diff -> format('%a');
}
function findDiff2($date1, $date2) :int // Другий варіант
{
    $diff = abs(strtotime($date1) - strtotime($date2));
    return floor($diff / (60*60*24));
}
?>
