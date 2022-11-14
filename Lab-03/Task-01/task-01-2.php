<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-01-1</title>
    <style>
        .result {
            width: 400px;
            height: 200px;
            border: black 2px solid;
            margin-top: 20px;
            padding: 20px;
        }
        textarea {
            width: 435px;
        }
    </style>
</head>
<body>
    <form>
        <h1>Сортування міст за алфавітом, через пробіл</h1>
        <textarea name="cities" placeholder="Введіть міста тут"></textarea><br>
        <input type="submit">
    </form>
    <div class="result">
        Результат виконання:
        <p>
            <?php
            $citiesStr = $_GET['cities'];
            $citiesArr = explode(" ", $citiesStr);
            sort($citiesArr);
            foreach($citiesArr as $value) {
                echo $value . " ";
            }
            ?>
        </p>
    </div>
</body>
</html>