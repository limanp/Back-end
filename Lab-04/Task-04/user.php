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
    </style>
</head>
<body>
<table>
    <?php
    if (isset($_POST["login"])) $login = $_POST["login"];
    if (isset($_POST["password"]) && isset($_POST["passwordRepeat"])) {
        $password = $_POST["password"];
        $passwordRepeat = $_POST["passwordRepeat"];

        $passwordLen = strlen($password);
        $passwordRepeatLen = strlen($passwordRepeat);

        $passwordVerification = $password === $passwordRepeat ?
            "співпадає" :
            "не співпадає (перший - $passwordLen символв, другий - $passwordRepeatLen символів)";
    }
    if (isset($_POST["gender"])) $gender = $_POST["gender"];
    if (isset($_POST["city"])) $city = $_POST["city"];
    if (isset($_POST["games"])) {
        $games = "";
        foreach ($_POST["games"] as $value) {
            $games .= $value . "<br>";
        }
    }
    //if (isset($_POST[]))
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
    <td>Місто</td>
    <td>$city</td>
</tr>
<tr>
    <td>Улюблені ігри:</td>
    <td>$games</td>
</tr>
<tr>
    <td>Про себе:</td>
    <td></td>
</tr>
<tr>
    <td>Фотографія:</td>
    <td></td>
</tr>
";
    ?>
</table>
</body>
</html>