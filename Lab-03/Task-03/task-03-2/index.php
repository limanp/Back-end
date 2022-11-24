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

function wordsOnlyFirstFile($words1, $words2)
{
    /*
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
    */
    $wordsOnlyFirstFile = fopen("result/wordsOnlyFirstFile.txt", "w") or die("Не вдалося відкрити файл");
    foreach(array_diff($words1, $words2) as $value) {
        fwrite($wordsOnlyFirstFile, $value . " ");
    }
    fclose($wordsOnlyFirstFile);
}
function wordsBothFile($words1, $words2)
{
    $wordsBothFile = fopen("result/wordsBothFile.txt", "w") or die("Не вдалося відкрити файл");
    foreach(array_intersect($words1, $words2) as $value) {
        fwrite($wordsBothFile, $value . " ");
    }
    fclose($wordsBothFile);
}

$wordsStr = file_get_contents("words/words1.txt");
$fileWords1 = explode(" ", $wordsStr);

$wordsStr = file_get_contents("words/words2.txt");
$fileWords2 = explode(" ", $wordsStr);


wordsOnlyFirstFile($fileWords1, $fileWords2);
wordsBothFile($fileWords1, $fileWords2);


?>
</body>
</html>
