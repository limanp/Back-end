<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-04</title>
    <style>
        body {
            font-family: Calibri;
        }
    </style>
</head>
<body>
<form action="user.php" method="post" enctype="multipart/form-data">
    <label>
        <table>
            <tr>
                <td>Логін:</td>
                <td><input type="text" name="login"/></td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Пароль(ще раз):</td>
                <td><input type="password" name="passwordRepeat"/></td>
            </tr>
            <tr>
                <td>Стать:</td>
                <td>
                    <input type="radio" name="gender" value="чоловік"/>чоловік
                    <input type="radio" name="gender" value="жінка"/>жінка
                </td>
            </tr>
            <tr>
                <td>Місто:</td>
                <td>
                    <select name="city">
                        <option value="Житомир">Житомир</option>
                        <option value="Звягель">Звягель</option>
                        <option value="Київ">Київ</option>
                        <option value="Рівне">Рівне</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Улюблены гри:</td>
                <td>
                    <input type="checkbox" name="games[]" value="футбол">футбол<br>
                    <input type="checkbox" name="games[]" value="баскетбол">баскетбол<br>
                    <input type="checkbox" name="games[]" value="волейбол">волейбол<br>
                    <input type="checkbox" name="games[]" value="шахи">шахи<br>
                    <input type="checkbox" name="games[]" value="World of Tanks">World of Tanks<br>
                </td>
            </tr>
            <tr>
                <td>Про себе:</td>
                <td><textarea name="aboutMe"></textarea></td>
            </tr>
            <tr>
                <td>Фотографія</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Зареєструватися"></td>
            </tr>
        </table>
    </label>
</form>

</body>
</html>