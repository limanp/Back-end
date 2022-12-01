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
            font-family: Calibri, serif;
        }

        img {
            width: 25px;
        }
        div:nth-child(2) {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
session_start();
?>
<div>
    <a href="index.php?lang=uk"><img src="images/flags/ukraine.png" alt="ukraine"></a>
    <a href="index.php?lang=fr"><img src="images/flags/france.png" alt="france"></a>
    <a href="index.php?lang=us"><img src="images/flags/united-states.png" alt="united-states"></a>
    <a href="index.php?lang=gr"><img src="images/flags/germany.png" alt="germany"></a>
    <a href="index.php?lang=ru"><img src="images/flags/russia.png" alt="russia"></a>
</div>
<div>
    <?php
    $langArr = ["uk" => "Українська", "fr" => "Француська",
        "us" => "Англійська", "gr" => "Німецька", "ru" => "Російська"];

    if (isset($_GET["lang"])) {
        setcookie("lang", $_GET["lang"], time() + 15778476);
        header("Refresh:0 url=index.php");
    }

    echo "Вибрана мова: " . $langArr[$_COOKIE["lang"]];
    ?>
</div>
<form action="user.php" method="post" enctype="multipart/form-data">
    <label>
        <table>
            <tr>
                <td>Логін:</td>
                <td><input type="text" name="login" value='<?php echo $_SESSION["login"]; ?>'/></td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="password" name="password" value='<?php echo $_SESSION["password"]; ?>'/></td>
            </tr>
            <tr>
                <td>Пароль(ще раз):</td>
                <td><input type="password" name="passwordRepeat" value='<?php echo $_SESSION["passwordRepeat"]; ?>'/>
                </td>
            </tr>
            <tr>
                <td>Стать:</td>
                <td>

                    <input type="radio" name="gender" value="чоловік"
                        <?php if ($_SESSION["gender"] === "чоловік") echo "checked"; ?>/>чоловік
                    <input type="radio" name="gender" value="жінка"
                        <?php if ($_SESSION["gender"] === "жінка") echo "checked"; ?>/>жінка
                </td>
            </tr>
            <tr>
                <td>Місто:</td>
                <td>
                    <select name="city">
                        <option value="Житомир"
                            <?php if ($_SESSION["city"] === "Житомир") echo "selected"; ?>>Житомир
                        </option>
                        <option value="Звягель"
                            <?php if ($_SESSION["city"] === "Звягель") echo "selected"; ?>>Звягель
                        </option>
                        <option value="Київ"
                            <?php if ($_SESSION["city"] === "Київ") echo "selected"; ?>>Київ
                        </option>
                        <option value="Рівне"
                            <?php if ($_SESSION["city"] === "Рівне") echo "selected"; ?>>Рівне
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Улюблены ігри:</td>
                <td>
                    <input type="checkbox" name="games[]" value="футбол"
                        <?php if (in_array("футбол", $_SESSION["games"])) echo "checked"; ?>>футбол<br>
                    <input type="checkbox" name="games[]" value="баскетбол"
                        <?php if (in_array("баскетбол", $_SESSION["games"])) echo "checked"; ?>>баскетбол<br>
                    <input type="checkbox" name="games[]" value="волейбол"
                        <?php if (in_array("волейбол", $_SESSION["games"])) echo "checked"; ?>>волейбол<br>
                    <input type="checkbox" name="games[]" value="шахи"
                        <?php if (in_array("шахи", $_SESSION["games"])) echo "checked"; ?>>шахи<br>
                    <input type="checkbox" name="games[]" value="World of Tanks"
                        <?php if (in_array("World of Tanks", $_SESSION["games"])) echo "checked"; ?>>World of Tanks<br>
                </td>
            </tr>
            <tr>
                <td>Про себе:</td>
                <td><textarea name="aboutMe"><?php echo $_SESSION["aboutMe"]; ?></textarea></td>
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