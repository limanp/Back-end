<!doctype html>
<html lang="ek">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <style>
        td:first-child {
            color: gray;
            text-align: right;
            vertical-align: top;
        }
        table {
            border-spacing: 5px;
        }
        img {
            max-width: 300px;
        }
        body {
            font-family: Calibri, serif;
        }
    </style>
</head>
<body>
<table>
    <?php
    session_start();
    if (isset($_POST["login"])) {
        $login = $_POST["login"];
        $_SESSION["login"] = $login;
    }
    if (isset($_POST["password"]) && isset($_POST["passwordRepeat"])) {
        $password = $_POST["password"];
        $passwordRepeat = $_POST["passwordRepeat"];

        $passwordLen = strlen($password);
        $passwordRepeatLen = strlen($passwordRepeat);

        $passwordVerification = $password === $passwordRepeat ?
            "співпадає" :
            "не співпадає (перший - $passwordLen символв, другий - $passwordRepeatLen символів)";
        $_SESSION["password"] = $password;
        $_SESSION["passwordRepeat"] = $passwordRepeat;
    }
    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
        $_SESSION["gender"] = $gender;
    }
    if (isset($_POST["city"])) {
        $city = $_POST["city"];
        $_SESSION["city"] = $city;
    }
    if (isset($_POST["games"])) {
        $games = "";
        foreach ($_POST["games"] as $value) {
            $games .= $value . "<br>";
        }
        $_SESSION["games"] = $_POST["games"];
    } else $_SESSION["games"] = [];
    if (isset($_POST["aboutMe"])) {
        $aboutMe = nl2br($_POST["aboutMe"]);
        $_SESSION["aboutMe"] = $_POST["aboutMe"];
    }
    if ($_FILES && $_FILES["image"]["error"]==UPLOAD_ERR_OK) {
        $fileName = "images/" . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $fileName);
    }
    echo "
<tr>
    <td>Логін:</td>
    <td>$login</td>
</tr>
<tr>
    <td>Пароль:</td>
    <td>$passwordVerification</td>
</tr>
<tr>
    <td>Стать:</td>
    <td>$gender</td>
</tr>
<tr>
    <td>Місто:</td>
    <td>$city</td>
</tr>
<tr>
    <td>Улюблені ігри:</td>
    <td>$games</td>
</tr>
<tr>
    <td>Про себе:</td>
    <td>$aboutMe</td>
</tr>
<tr>
    <td>Фотографія:</td>
    <td><img src=$fileName alt='image'></td>
</tr>
";
    ?>
</table>
<a href="index.php">Повернутися на головну сторінку</a>
</body>
</html>