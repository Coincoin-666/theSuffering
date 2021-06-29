<?php
// Définition du fuseau horaire. Ca marche pas mais on le mets quand même.
setlocale(LC_TIME, "fr_FR.utf8", "fra");
date_default_timezone_set("Europe/Paris");

// Déclaration des variables

// Limites 

// Début
$yearOne = mktime(12, 0, 0, 1, 1, 1900); // On commence le 1er Janvier 1900,
$dayOne = strftime("%u", $yearOne); // soit lundi = 1, mardi = 2 etc.
$yearOne_for_humans = strftime("%Y", $yearOne); // strftime() pour stringformattime pour les humains.

// Fin
$yearLast = mktime(12, 0, 0, 12, 31, 2050); // On finit le 31 Décembre 2050,
$dayLast = strftime("%u", $yearLast); // soit dimanche = 7, samedi = 6, etc.
$yearLast_for_humans = strftime("%Y", $yearLast);

// 256,654ème essai pour faire ce putain de tableau de mois.
// Le cal_days_in_month n'accepte que des integers,
// donc pour faire les calculs, il faut que les mois soient des chiffres.
$months = [
    'janvier' => 1,
    'février' => 2,
    'mars' => 3,
    'avril' => 4,
    'mai' => 5,
    'juin' => 6,
    'juillet' => 7,
    'août' => 8,
    'septembre' => 9,
    'octobre' => 10,
    'novembre' => 11,
    'décembre' => 12,
];

// Années disponibles = de 1900 à 2050 avec un pas de 1.
$years = range($yearOne_for_humans, $yearLast_for_humans, 1);

$oneDayInSeconds = 86400;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-999</title>
</head>

<body>
    <div class="container m-4 align-item-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" class="row g-3" novalidate>
            <div class="col-5">
                <label for="month" class="form-label">Sélectionnez un mois:</label>
                <select name="<?= $months ?>" id="month" class="form-select">
                    <!-- Par défault, on sélectionne le mois en cours. En trichant parce que faut pas déconner non plus. -->
                    <option value="default" selected><?= array_keys([$months][5]) ?></option>
                    <?php
                    foreach ($months as $month) {
                        echo array_keys($months);
                    ?>
                        <option value="<?= array_keys($months) ?>">
                        <?php
                    }
                        ?>
                        </option>
                </select>
            </div>
            <div class="col-5">
                <label for="year" class="form-label">Sélectionnez une année:</label>
                <select name="year" id="year" class="form-select">
                    <!-- Pareil pour l'année, dans le tableau créé avec range(), à l'index 121. -->
                    <option value="default" selected><?= $years[121] ?></option>
                    <?php
                    foreach ($years as $year) { ?>
                        <option value="<?= $year ?>">
                        <?php
                        echo $year;
                    }
                        ?>
                        </option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-3" id="magick_btn">MagickAleNd-Ar</button>
            </div>
            <?php

            if (isset($_GET["month"]) && isset($_GET["year"])) {
                $usr_month = $_GET["month"];
                // Assignement des mois à des nombres parce que c'est mieux.
                // Et surtout parce que le cal_days_in_month il préfère les integers.
                // if (isset($usr_month)) {
                //     switch ($usr_month) {
                //         case 'janvier':
                //             $usr_month = 1;
                //             break;
                //         case 'février':
                //             $usr_month = 2;
                //             break;
                //         case 'mars':
                //             $usr_month = 3;
                //             break;
                //         case 'avril':
                //             $usr_month = 4;
                //             break;
                //         case 'mai':
                //             $usr_month = 5;
                //             break;
                //         case 'juin':
                //             $usr_month = 6;
                //             break;
                //         case 'juillet':
                //             $usr_month = 7;
                //             break;
                //         case 'août':
                //             $usr_month = 8;
                //             break;
                //         case 'septembre':
                //             $usr_month = 9;
                //             break;
                //         case 'octobre':
                //             $usr_month = 10;
                //             break;
                //         case 'novembre':
                //             $usr_month = 11;
                //             break;
                //         case 'décembre':
                //             $usr_month = 12;
                //             break;
                //     }
                    $week = strftime("%V", $usr_month);
                    if (isset($week)) {
                        $day = strftime("%A", $week);
                    }
                    $usr_year = $_GET["year"];
                    echo "<p>Vous avez demandé le " . $usr_month . "<sup>ème</sup> mois de l'an de grâce " . $usr_year . ".</p>";
                }

            ?>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr class="fw-bold text-light bg-primary">
                            <th scope="col">lundi</th>
                            <th scope="col">mardi</th>
                            <th scope="col">mercredi</th>
                            <th scope="col">jeudi</th>
                            <th scope="col">vendredi</th>
                            <th scope="col">samedi</th>
                            <th scope="col">dimanche</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        echo cal_days_in_month(CAL_GREGORIAN, $usr_month, $usr_year);
                        if (cal_days_in_month(CAL_GREGORIAN, $usr_month, $usr_year)) {
                        ?>
                        
                        <?php
                        }
                        echo $day;
//                        echo "<p>Bienvenue sur le <span class='fs-3 fw-bold text-primary'>SUPER CALENDRIER</span>.</p><p class='text-success'>Sélectionnez un mois et une année si vous voulez vous éclatez avec nous!";
                        ?>
                    </tbody>
                </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>