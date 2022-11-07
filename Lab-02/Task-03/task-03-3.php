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

// Для зливання масивів є array_merge() але я написав свій варіант коду
function arrayMerge($arr1, $arr2): array
{
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

function arrayEditing($arr1, $arr2): array
{
    $arrayMerged = arrayMerge($arr1, $arr2);
    $arrayDelRepeat = arrayDeleteRepeatItem($arrayMerged);
    return $arrayDelRepeat;

}

// Функція для сторювання масиву
function arrayCreate(): array
{
    $size = rand(3, 7);
    $arr = array();
    for ($i = 0; $i < $size; $i++) {
        $arr[] = rand(10, 20);
    }
    return $arr;
}

?>