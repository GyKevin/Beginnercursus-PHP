<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img {
        width: 5%;
    }
    </style>
</head>
<body>
    <?php

    $zwemklub = ["De Spartelkuikens" => 25, "De waterbuffels" => 32, "plonsmderin" => 11, "boometje" => 23];

    foreach ($zwemklub as $klubs => $leden) {
        $aantalplaatjes = floor($leden/5);
        echo $klubs;
        for($i=0; $i<$aantalplaatjes; $i++) {
            echo "<img src='img/swim.png'>";
        }
        echo "<br>";
	}

    ?>
</body>
</html>