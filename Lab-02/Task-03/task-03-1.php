<html>
<body>
<?php
$numbers = [5, 2, 4, 5, 1, 2, 4, 7, 4, 6, 4, 0, 0];
$repeatNumbers = findRepeatNumbers($numbers);
print_r($numbers);
echo '<br>';
print_r($repeatNumbers);
?>
</body>
</html>

<?php
function findRepeatNumbers($numbers)
{
    $repeatNumbers = array();
    $isNumberInArray = false;
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $count = 0;
        for ($j = 0; $j < count($numbers); $j++) {
            if ($numbers[$i] === $numbers[$j]) {
                $number = $numbers[$i];
                $count++;
            }
        }
        for ($j = 0; $j < count($repeatNumbers); $j++) {
            $isNumberInArray = $number === $repeatNumbers[$j] ? true : false;
            if ($isNumberInArray)
                break;
        }
        if (!$isNumberInArray && $count > 1)
            $repeatNumbers[] = $number;
        $count = 0;
    }
    return $repeatNumbers;
}

?>
