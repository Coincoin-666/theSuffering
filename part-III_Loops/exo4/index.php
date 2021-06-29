<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-304</title>
</head>

<body>
    <?php

    // for ($A = 1; $A < 11; $A += $A / 2) {
    //     echo $A, "<br>";
    // }
    $A = 1;

    while ($A < 10) {
        $A += $A / 2;
        echo "<p>$A</p>";
    }

    ?>
</body>

</html>