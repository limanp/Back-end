<html>

<body>
    <form>
        Введіть тризначне число: <input type="number" name="number" name="number">
        <input type="submit">
    </form>
    <?php
    function sumNum($num)
    {
        $result = 0;
        while ($num) {
            $result = $result + $num % 10;
            $num = (int)($num / 10);
        }
        return $result;
    }
    function reverseNum($num)
    {
        $result = 0;
        while ($num) {
            $result = $result * 10 + $num % 10;
            $num = (int)($num / 10);
        }
        return $result;
    }

    function largestNum($num)
    {
        $numbers = array();
        $result = 0;

        while ($num) {
            $numbers[] = $num % 10;
            $num = (int)($num / 10);
        }
        rsort($numbers);
        foreach ($numbers as $value) {
            $result = $result * 10 + $value;
        }
        return $result;
    }
    $number = $_GET["number"];
    echo "<p>Введене число: $number</p>";
    echo '<p>Сума цифр числа: ' . sumNum($number) . '</p>';
    echo '<p>Число у зворотньому порядку: ' . reverseNum($number) . '</p>';
    echo '<p>Найбільше число з можливих: ' . largestNum($number) . '</p>';
    ?>
</body>

</html>