<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $prijs = 10;
    $leeftijd = 2;

    if ($leeftijd <= 12) {
        $prijs = $prijs * 0.5;
    }

    if ($leeftijd <= 3){
        $prijs = $prijs * 0;
    }

    if ($leeftijd >= 65) {
        $prijs = $prijs * 0.5;
    }

    echo "het ticket kost: ".$prijs;

    ?>
</body>
</html>