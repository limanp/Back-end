<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-01-1</title>
    <style>
        .inputs {
            width: 200px;
        }

        .inputs input {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<form>
    <div class="inputs">
        <input name="text" placeholder="текст">
        <input name="find" placeholder="знайти">
        <input name="replace" placeholder="замінити">
        <?php
        $text = $_GET['text'];
        $oldString = $_GET['find'];
        $newString = $_GET['replace'];

        $result = str_replace($oldString, $newString, $text);
        echo "<input name='result' placeholder='результат' value=\"$result\" >";
        ?>
        <input type="submit">
    </div>
</form>
</body>
</html>
