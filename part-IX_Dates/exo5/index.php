<?php
setlocale(LC_TIME, "fr_FR.utf8", "fra");

$today = time();
$_16may2016 = mktime(12, 0, 0, 5, 16, 2016);

$numberOfDaysInSeconds = $today - $_16may2016;

$numberOFDaysInDays = $numberOfDaysInSeconds / 86400;


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-905</title>
</head>

<body>
    <div>
        <?php

        echo round($numberOFDaysInDays);

        ?>
    </div>

    <!-- Franck's (correct) version -->

    <div>
        <?php

        $date1 = new DateTime("2016-05-16"); // On créé un objet avec la classe DateTime
        $date2 = new DateTime("2021-06-21");
        $diff = $date2->diff($date1)->format("%a"); // La fonction diff() est propre à la classe DateTime
        echo $diff;

        ?>
    </div>
    <!-- Problème: Comment rendre la $date2 dynamique ? Puisqu'on se retrouve avec deux dates fixes dans la VFranck, alors qu'on en aurait besoin que d'une. -->
</body>

</html>