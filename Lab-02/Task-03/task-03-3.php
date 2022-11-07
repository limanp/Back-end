<html>
<body>
<?php
$arr1 = arrayCreate();
$arr2 = arrayCreate();
print_r(arrayEditing($arr1, $arr2));
?>
</body>
</html>

<?php


function arrayMerge($arr1, $arr2): array
{
    // Для зливання масивів є array_merge() але я написав свій варіант коду

    $result = array();
    foreach ($arr1 as $value)
        $result[] = $value;
    foreach ($arr2 as $value)
        $result[] = $value;
    return $result;
}

function arrayDeleteRepeatItem($arr): array
{
    $result = array();
    foreach($arr as $value) {
        if(!in_array($value, $result))
            $result[] = $value;
    }
    return $result;
}


function arraySort(&$arr)
{
    // Для сортування є sort та інш. і краще використовувати їх, так як вони використовують швидке сортування
    // В цій функції я написав стандартний бульбашковий алгоритм, він підійде лише для навчання)
    $sizeArray = count($arr);
    for($j = 1; $j <= $sizeArray - 1; $j++) {
        $isSwitch = false;
        for($i = 0; $i <= $sizeArray - 1 - $j; $i++) {
            if($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $isSwitch = true;
            }
        }
        if(!$isSwitch)
            break;
    }
}

function arrayEditing($arr1, $arr2): array
{
    // Це основна функція яка була в завданні, я розділив її на три підфункції)
    $arrResult = arrayMerge($arr1, $arr2);
    $arrResult = arrayDeleteRepeatItem($arrResult);
    arraySort($arrResult);
    return $arrResult;

}

function arrayCreate(): array
{
    // Функція для сторювання масиву
    $size = rand(3, 7);
    $arr = array();
    for ($i = 0; $i < $size; $i++) {
        $arr[] = rand(10, 20);
    }
    return $arr;
}

?>