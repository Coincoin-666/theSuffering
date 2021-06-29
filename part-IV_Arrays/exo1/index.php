<?php
$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
$monthsLength = count($months);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-401</title>
</head>

<body>

    <?= "<p>$months[2]</p>" ?>
    <?= "<p>$months[5]</p>" ?>

    <?php
        $months[7] = "août";
        echo $months[7];

        $i = 0;
        while ($i < $monthsLength) {
            echo "<p>$months[$i]</p>";
            $i++;
        }
    ?>

</body>

</html>