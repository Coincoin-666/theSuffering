<?php
setlocale(LC_TIME, "fr_FR.utf8", "fra");

$_1feb2016 = mktime(12, 0, 0, 2, 1, 2016);
$_1mar2016 = mktime(12, 0, 0, 3, 1, 2016);

$numberOfSecondsInTheMonthOfFebruaryOfTheYearTwoThousandAndSixteen = $_1mar2016 - $_1feb2016;
$numberOfDaysInTheMonthOfFebruaryOfTheYearTwoThousandAndSixteen = $numberOfSecondsInTheMonthOfFebruaryOfTheYearTwoThousandAndSixteen / 86400;


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-906</title>
</head>

<body>
    <div>
        <?php

        echo $_1feb2016 . "<br>";
        echo $_1mar2016 . "<br>";
        echo $numberOfSecondsInTheMonthOfFebruaryOfTheYearTwoThousandAndSixteen . "<br>";
        echo $numberOfDaysInTheMonthOfFebruaryOfTheYearTwoThousandAndSixteen;

        ?>
    </div>

    <!-- Franck's Version -->

    <div>
        <?php

        // cal_days_in_month permet de connaître le nombre de jours dans un mois.
        // Il faut lui passer en paramètres: le type de calendrier de référence, le mois et l'année.

        $numberOfDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo "il y avait $numberOfDays jours en février 2016";

        ?>
    </div>
</body>

</html>