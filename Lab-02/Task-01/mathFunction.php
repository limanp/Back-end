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
    } else if ($exponent < 0) {
        return 1 / powImport($num, $exponent * -1);
    } else return 1;
}

function factorial($num)
{
    if ($num < 0) {
        return factorial($num * -1) * -1;
    }
    $result = 1;
    while ($num) {
        $result *= $num;
        $num--;
    }
    return $result;
}

function my_tg($num)
{
    return sin($num) / cos($num);
}

function average($numX, $numY)
{
    return ($numX + $numY) / 2;
}

?>