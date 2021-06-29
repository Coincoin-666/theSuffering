<?php
setlocale(LC_TIME, "fr_FR.utf8", "fra");

$howManySecondsIn22Days = 22 * 86400;
$today = time();
$todayMinusTwentyTwoDays = $today - $howManySecondsIn22Days;

$Be___Human___Biatch = strftime("%A %d %B %Y", $todayMinusTwentyTwoDays);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-907</title>
</head>

<body>
    <?= $Be___Human___Biatch ?>

    <!-- Franck's Version -->
    <?php
    
    $date1 = date("Y-m-d");
    setlocale(LC_TIME, "fr_FR.utf8");
    date_default_timezone_set("Europe/paris");
    echo strftime("%A %d %B %Y", strtotime($date1 . ' - 22 days'));

    ?>
</body>

</html>