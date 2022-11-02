<html>
<head>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo createSquare(10);
    ?>
</div>
</body>
</html>

<?php
function createSquare($quantity)
{
    $squares = '<div style:"position: relative">';
    $counter = 0;
    while ($counter < $quantity) {
        $size = rand(20, 200);
        $marginLeft = rand(0, 1200);
        $marginRight = rand(0, 700);
        $marginTop = rand(0, 700);
        $squares .= "<div style='background-color: red; width:$size; height: $size;
        margin-left:$marginLeft; margin-right:$marginRight; margin-top:$marginTop; position:absolute' ></div>";
        $counter++;
    }
    return $squares .= '</div>';
}

?>

