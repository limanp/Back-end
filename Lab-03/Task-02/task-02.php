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
$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];
?>
<form>
    <label>
        <select name="day">
            <?php
            for($i = 1; $i <= 31; $i++) {
                $selected = !is_null($day) ? $day : date("d");
                echo "<option value='$i'" . ($i === (int)$selected ? "selected" : "") . ">$i</option>";
            }
            ?>
        </select>
        <select name="month">
            <?php
            foreach($months as $key => $value) {
                $selected = !is_null($month) ? $month : date("m");
                echo "<option value='$key'" . ($key === (int)$selected ? "selected" : "") . ">$value</option>";
            }
            ?>
        </select>
        <select name="year">
            <?php
            for($i = 1970; $i <= (int)date("Y"); $i++) {
                $selected = !is_null($year) ? $year : date("Y");
                echo "<option value='$i'". ($i === (int)$selected ? "selected" : "") . ">$i</option>";
            }
            ?>
        </select>
    </label>
    <input type="submit">
</form>
<?php
$isValid = checkdate((int)$month, (int)$day, (int)$year);
if(is_null($day) || is_null($month) || is_null($year))
    echo "<div class='result'>Ведіть значення.</div>";
else if($isValid) {
    $date = date_create("$year-$month-$day");
    echo "<div class='result'>" . $date -> format("d-m-Y") . "</div>";
}
else echo "<div class='error'>Помилка! Ведіть правильне значення.</div>";

?>
</body>
</html>