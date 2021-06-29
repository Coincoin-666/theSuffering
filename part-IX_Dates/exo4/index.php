<?php
// Apparemment ça c'est pour strftime
// setlocale(LC_TIME, "fr_FR.utf8", "fra");

// Et ça ça devrait être pour date et mktime
// date_default_timezone_set("Europe/Paris");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-904</title>
</head>

<body>
    <?php
    echo time() . "<br>";

    echo "Le 02 août 2016 c'était: " . mktime(15, 0, 0, 8, 2, 2016);
    ?>
</body>

</html>