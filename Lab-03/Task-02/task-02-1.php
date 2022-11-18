<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$months = [1 => "Січень", "Лютий", "Березень", "Квітень", "Травень",
    "Червень", "Липень", "Серпень", "Вересень", "10" => "Жовтень",
    "Листопад", "Грудень",];
?>
<form>
    <label>
        <select name="number">
            <?php
            for($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'" . ($i === (int)date("d") ? "selected" : "") . ">$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <?php
            foreach($months as $key => $value) {
                echo "<option value='$key'" . ($key === (int)date("m") ? "selected" : "") . ">$value</option>";
            }
            ?>
        </select>
        <select name="year">
            <?php
            for($i = 1970; $i <= (int)date("Y"); $i++) {
                echo "<option value='$i'". ($i === (int)date("Y") ? "selected" : "") . ">$i</option>";
            }
            ?>
        </select>
    </label>
    <input type="submit">
</form>
</body>
</html>