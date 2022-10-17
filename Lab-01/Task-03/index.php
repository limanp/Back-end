<html>
    <body>
        <form action="index.php" method="get">
            Введіть гривню: <input type="number" name="hryvnia">
            <input type="submit">
        </form>
    </body>
</html>

<?php

$hryvnia = $_GET["hryvnia"];
if($hryvnia != NULL) {
    $dollar = round($hryvnia / 36.90, 2) ;
    echo "Результат конвертування в долари: $dollar";
}
else echo 'Введіть значення!!!';
?>