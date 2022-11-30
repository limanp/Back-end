<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-03</title>
    <style>
        a {
            text-decoration: none;
            color: black;
            padding: 10px;
            border: 1px solid black;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<?php
$authorization = "<h1>Щоб увійти до профілю, ведіть логін та пароль</h1>
<form>
    <label>
        <input name='login' placeholder='Логін'>
        <input type='password' name='password' placeholder='Пароль'>
    </label>
    <input type='submit' value='авторизація'>
</form>";

session_start();
if ($_SESSION["login"] === "Admin" && $_SESSION["password"] === "password") {
    echo "<h1>Добрий день, Admin</h1>";
    echo "<a href='http://backend/Lab-04/Task-03/index.php?exit=true'>Вихід</a>";
} else echo $authorization;

if (isset($_GET["login"]))
    $_SESSION["login"] = $_GET["login"];

if (isset($_GET["password"]))
    $_SESSION["password"] = $_GET["password"];

if ($_GET["exit"])
    session_destroy();

if (isset($_GET["login"]) || isset($_GET["password"]) || $_GET["exit"])
    header("Refresh:0 url=index.php");
?>
</body>
</html>
