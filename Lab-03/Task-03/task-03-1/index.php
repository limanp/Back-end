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
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
        }
        th, td {
            padding: 20px;
            background-color: black;
            color: white;
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
        <tr><th>Ім'я</th><th>Коментар</th></tr>
        <?php
        $name = $_GET["name"];
        $comment = $_GET["comment"];
        // Можна зробити набагато проще просто через параметр а, але хотів використати функцію fseek
        $mode = file_exists("comments.txt") ? 'r+' : 'w+';
        $commentsFile = fopen("comments.txt", $mode) or die("Не вдалося відкрити файл");

        if(!is_null($name) && !is_null($comment) && $name != "" && $comment != "")
        {
            fseek($commentsFile, 0, SEEK_END);
            fwrite($commentsFile, "$name:$comment\n");
        }
        fseek($commentsFile, 0);
        while(!feof($commentsFile)) {
            $line = fgets($commentsFile);
            lineToTable($line);
        }
        fclose($commentsFile);

        ?>
    </table>
</body>
</html>

<?php
function lineToTable($line)
{
    $pos = mb_strpos($line, ":");
    $name = mb_substr($line, 0, $pos);
    $comment = mb_substr($line, $pos + 1);
    if($name != "" && $comment != "")
        echo "<tr><td>$name</td><td>$comment</td></tr>";
}
?>
