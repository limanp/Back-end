<html>

<body style="padding: 20px;">
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php?roll=true'>Кинути кубік</a><br><br>
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php'>Очистити сторінку</a><br>
</body>
<?php
function diceRoll()
{
    $dice = mt_rand(1, 6);
    echo "<div>Виводимо кубік...</div> <div>Випало число $dice</div>";
}
if (isset($_GET['roll'])) {
    diceRoll();
}
?>

</html>