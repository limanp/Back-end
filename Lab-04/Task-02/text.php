<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            font-size: <?php if(isset($_COOKIE["fontSize"])) echo $_COOKIE["fontSize"] . "px;"; ?>
            width: 500px;
            border: solid 1px black;
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
<div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Ab aliquam, aperiam asperiores delectus ducimus earum fuga
    fugiat illo ipsum libero nemo nisi officiis optio quaerat
    quidem quis ratione voluptates. In.
</div>
<a href="http://backend/Lab-04/Task-02/">Головна сторінка</a>
</body>
</html>