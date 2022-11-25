<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete user</title>
</head>
<body>
<a href="index.php">Перейти до створення</a>
<form>
    <h3>Ведіть данні для вилучення</h3>
    <label>
        <input name="login" placeholder="Логін">
        <input type="password" placeholder="Пароль">
    </label>
    <input type="submit" value="Відправити">
</form>
</body>
</html>

<?php
function deleteFile($dir)
{
    if (is_dir($dir))
    {
        echo "current dir = $dir<br>";
        if ($dh = opendir($dir))
        {
            while (($file = readdir($dh)) !== false)
            {
                if($file=='.' || $file=='..') continue;
                if(is_dir("$dir/$file"))
                {
                    echo "this is dir = $dir - $file<br>";
                    deleteFile("$dir/$file");
                }
                else echo "this is file = $file<br>";
            }
            closedir($dh);
        }
    }
}

$login = $_GET["login"];
$password = $_GET["password"];

if ($login != "" && !is_null($login))
    deleteFile($login);
?>