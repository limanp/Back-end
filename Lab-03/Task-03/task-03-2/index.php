<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-03-2</title>
</head>
<body>
<?php

function wordsOnlyFirst($words1, $words2) : string
{
    $result = "";
    $isMatch = false;
    foreach($words1 as $value1) {
        foreach($words2 as $value2) {
            $isMatch = $value1 === $value2;
            if($isMatch)
                break;
        }
        if(!$isMatch)
            $result .= $value1 . " ";

    }
    return $result;
}

$wordsStr = file_get_contents("words/words1.txt");
$wordsArr1 = explode(" ", $wordsStr);

$wordsStr = file_get_contents("words/words2.txt");
$wordsArr2 = explode(" ", $wordsStr);

$wordsOnlyFirstFile = fopen("result/OnlyFirstFile.txt", "w") or die("Не вдалося відкрити файл");
fwrite($wordsOnlyFirstFile, wordsOnlyFirst($wordsArr1, $wordsArr2));
fclose($wordsOnlyFirstFile);


?>
</body>
</html>
