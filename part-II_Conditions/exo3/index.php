<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-203</title>
</head>
<body>
    
    <?php

    $age = 32;
    $gender = "homme";
    
    if ($age >= 18 && $gender == "homme") {
        echo "Vous êtes un homme et vous êtes majeur.";
    } else if ($age < 18 && $gender == "homme") {
        echo "Vous êtes un homme et vous êtes mineur.";
    } else if ($age >= 18 && $gender == "femme") {
        echo "Vous êtes une femme et vous êtes majeure.";
    } else {
        echo "Vous êtes une femme et vous êtes mineure.";
    }
    

    ?>

</body>
</html>