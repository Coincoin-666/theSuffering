<?php
function compareNum($num_1, $num_2)
{
    $isGreaterThan = "Le premier nombre est plus grand que le second.";
    $isLowerThan = "Le premier nombre est plus petit que le second.";
    $isEqual = "Les deux nombres sont identiques.";
    if ($num_1 > $num_2) {
        return $isGreaterThan;
    } elseif ($num_1 < $num_2) {
        return $isLowerThan;
    } elseif ($num_1 == $num_2) {
        return $isEqual;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-504</title>
</head>

<body>
    <?php
        echo compareNum(124, 388);
    ?>
</body>

</html>