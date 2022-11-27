<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-02</title>
    <style>
        div {
            font-size: <?php if(isset($_COOKIE["fontSize"])) echo $_COOKIE["fontSize"] . "px;";?>
            width: 500px;
            border: solid 1px black;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        a{
            text-decoration: none;
            padding: 10px;
            border: solid 2px black;
            background: grey;
            margin-right: 10px;
            color: white;
        }
    </style>
</head>
<body>
<?php
$link = "http://backend/Lab-04/Task-02/index.php?fontSize";
echo "<a href='$link=30'>Великий шрифт</a>";
echo "<a href='$link=20'>Середній шрифт</a>";
echo "<a href='$link=15'>Маленький шрифт</a><br>";

$fontSize = '20';
if (isset($_GET["fontSize"])) {
    setcookie("fontSize", $_GET["fontSize"]);
    header("Refresh:0 url=index.php");
}
?>
<div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad,
    aliquid aperiam dolores ea eaque ex facere fugiat illum iste minus nesciunt nihil obcaecati
    provident, qui, rem repellat sequi veniam.
</div>
<a href="http://backend/Lab-04/Task-02/text.php">Інша сторінка</a>
</body>
</html>
