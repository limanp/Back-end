<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-04</title>
</head>
<body>
    <form>
        <label>
            <input name="login" placeholder="Логін">
            <input type="password" name="password" placeholder="Пароль">
        </label>
        <input type="submit">
    </form>
</body>
</html>

<?php
function userCreate($login, $password) {
    if(!mkdir($login)) {
        echo "Помилка при створенні кататогу користувача $login";
        return;
    }
    $catalogs = ["video", "music", "photo"];
    foreach($catalogs as $value) {
        if(!mkdir("$login/$value"))
            echo "Помилка при створенні кататогу $value";
    }



}

$login = $_GET["login"];
$password = $_GET["login"];

if($login != "" && !is_null($login))
    userCreate($login, $password);



?>