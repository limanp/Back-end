<html>
<body>
<?php
print_r(arrayCreate());
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

function arrayEditing($arr1, $arr2): array
{
    $arrayMerged = arrayMerge($arr1, $arr2);

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