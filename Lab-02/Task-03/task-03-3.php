<html>
<body>

</body>
</html>

<?php
function createArray()
{
    $size = rand(3, 7);
    $numbers = [];
    for($i = 0; $i < $size; $i++) {
        $numbers[] = rand(10, 20);
    }
    return $numbers;
}

?>