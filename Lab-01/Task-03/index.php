<html>
    <body>
        <form action="index.php" method="get">
            Enter hryvnia: <input type="number" name="hryvnia">
            <input type="submit">
        </form>
    </body>
</html>

<?php

$hryvnia = $_GET["hryvnia"];
if($hryvnia != NULL) {
    $dollar = round($hryvnia / 36.90, 2) ;
    echo "Result convert to dollar: $dollar";
}
else echo 'Enter value';
?>