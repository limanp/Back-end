<?php
$getWords = file_get_contents("words.txt");
$words = explode(" ", $getWords);
sort($words);

$wordsFile = fopen("words.txt", "w") or die("Не вдалося відркити файл");
foreach($words as $value) {
    fwrite($wordsFile, $value . " ");
}
?>