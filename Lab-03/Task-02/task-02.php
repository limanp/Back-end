<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-02</title>
    <style>
        .result {
            border: black solid 1px;
            border-radius: 5px;
            width: 200px;
            margin: 10px;
            padding: 20px;
            text-align: center;
        }
        .error {
            font-size: 30px;
            color: red;
        }
    </style>
</head>
<body>
<?php
$months = [1 => "Січень", "Лютий", "Березень", "Квітень", "Травень",
    "Червень", "Липень", "Серпень", "Вересень", "10" => "Жовтень",
    "Листопад", "Грудень",];
?>
<form>
    <label>
        <select name="day">
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
<?php
$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];
$isValid = checkdate((int)$month, (int)$day, (int)$year);

if($isValid) {
    $date = date_create("$year-$month-$day");
    echo "<div class='result'>" . $date -> format("d-m-Y") . "</div>";
}
else echo "<div class='error'>Помилка! Ведіть правильне значення.</div>";

?>
</body>
</html>