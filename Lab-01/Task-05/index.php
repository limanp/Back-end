<html>

<body style="padding: 20px;">
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php?roll=true'>Кинути кубік</a>
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php'>Очистити сторінку</a><br>


    <?php
    function diceRoll($whoRoll)
    {
        $diceOne = mt_rand(1, 6);
        $diceTwo = mt_rand(1, 6);
        if ($whoRoll === 'human')
            echo "<p>У вас випало $diceOne i $diceTwo</p>";
        else
            echo "<p>У робота випало $diceOne i $diceTwo</p>";
        return $diceOne + $diceTwo;
    }
    if (isset($_GET['roll'])) {
        $human = diceRoll('human');
        $robot = diceRoll('robot');

        $win = $human === $robot ? 'Перемогла дружба!!!' : ($human > $robot ? 'Ви перемогли' : 'Робот переміг');
        echo "<p>Результат: $win</p>";
    }
    ?>

</body>

</html>