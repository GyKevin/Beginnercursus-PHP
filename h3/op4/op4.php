<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .rood {
        border: 5px red solid;
    }

    .green {
        border: 5px green solid;
    }
    </style>
</head>
<body>
    <?php
    for ($i=0; $i<9; $i++) {
        if ($i % 2 == 0){
            $class = "class='rood'";
        } else {
            $class = "class='green'";
        }
        echo "<img ".$class." src='img/aap".$i.".jpg'>";
    }
    ?>
</body>
</html>