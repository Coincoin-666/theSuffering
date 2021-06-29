<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-204</title>
</head>
<body>
    
    <?php

    $magnitude = array(
        1=>"Micro-séisme impossible à ressentir.",
        2=>"Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
        3=>"Ne cause pas de dégât mais commence à pouvoir être légèrement ressenti.",
        4=>"Séisme capable de faire bouger des objets mais ne causant généralement pas de dégât.",
        5=>"Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou sur des bâtiments présentant des défauts de constructino. Peu de dégâts sur les bâtiments modernes.",
        6=>"Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
        7=>"Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
        8=>"Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
        9=>"Séisme capable de tout détruire sur une très vaste zone."
    );

    echo $magnitude[3];

    ?>
</body>
</html>