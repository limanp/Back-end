<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task-01</title>
    <style>
        textarea {
            width: 500px;
            height: 250px;
        }
        div {
            border-bottom: solid 1px black;
        }
    </style>
</head>
<body>
<form>
    <label>
        <textarea name="text"></textarea>
    </label><br>
    <input type="submit">
</form>
<?php
$text = $_GET["text"];
$pattern  = "/htt(p|ps):\/\/[a-z.0-9\/_?=-]*/i";
echo '<div>' . preg_replace($pattern, "«тут була адреса сайту»", $text) . '</div>';

$textSplit = preg_split("/[\s]/", $text);
$links = preg_grep($pattern, $textSplit);
print_r($links);
?>
</body>
</html>
