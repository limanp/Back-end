<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-03-1</title>
    <style>
        form {
            width: 250px;
        }
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <form>
        <label>
            <input name="name" placeholder="Ім'я">
            <textarea name="comment" placeholder="Коментар" maxlength="100"></textarea>
        </label>
        <input type="submit">
    </form>
    <table>
        <?php

        ?>
    </table>
</body>
</html>

<?php
$name = $_GET["name"];
$comment = $_GET["comment"];

$commentsFile = fopen("comments.txt", 'a+') or die("Не вдалося відкрити файл");
fseek($commentsFile, 0, SEEK_END);
fwrite($commentsFile, "$name : $comment\n");
fclose($commentsFile);
echo $name;

?>