<?php
// ---------------- рядки, які зустрічаються тільки в першому файлі ----------------
function wordsOnlyFirstFile($words1, $words2)
{
    $wordsOnlyFirstFile = fopen("result/wordsOnlyFirstFile.txt", "w") or die("Не вдалося відкрити файл");
    foreach (array_diff($words1, $words2) as $value) {
        fwrite($wordsOnlyFirstFile, $value . " ");
    }
    fclose($wordsOnlyFirstFile);
}

// ---------------- рядки, які зустрічаються в обох файлах ----------------
function wordsBothFile($words1, $words2)
{
    $wordsBothFile = fopen("result/wordsBothFile.txt", "w") or die("Не вдалося відкрити файл");
    foreach (array_intersect($words1, $words2) as $value) {
        fwrite($wordsBothFile, $value . " ");
    }
    fclose($wordsBothFile);
}

// ---------------- рядки, які зустрічаються в кожному файлі більше двох разів ----------------
function wordsOccurMoreTwice($words1, $words2)
{
    $count = 0;
    $result = [];
    foreach($words1 as $value1) {
        foreach($words2 as $value2) {
            if($value1 === $value2)
                $count++;
            if($count > 2 && !array_search($value1, $result)) {
                $result[] = $value1;
                $count = 0;
                break;
            }
        }
    }
    $wordsOccurMoreTwice = fopen("result/wordsOccurMoreTwice.txt", "w") or die("Не вдалося відкрити файл");
    foreach($result as $value) {
        fwrite($wordsOccurMoreTwice, $value . " ");
    }
    fclose($wordsOccurMoreTwice);
}

// ---------------- Запис з файлу у масив ----------------
$wordsStr = file_get_contents("words/words1.txt");
$fileWords1 = explode(" ", $wordsStr);
$wordsStr = file_get_contents("words/words2.txt");
$fileWords2 = explode(" ", $wordsStr);

// ---------------- Визов функцій ----------------
wordsOnlyFirstFile($fileWords1, $fileWords2);
wordsBothFile($fileWords1, $fileWords2);
wordsOccurMoreTwice($fileWords1, $fileWords2);
?>

