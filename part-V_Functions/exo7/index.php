<?php
    function separatisme($age, $gender) {
        if ($age >= 18 && $gender == "male") {
            return "Vous êtes un homme majeur.";
        } elseif ($age >= 18 && $gender == "female") {
            return "Vous êtes une femme majeure.";
        } elseif ($age < 18 && $gender == "male") {
            return "Vous êtes un homme mineur.";
        } else {
            return "Vous êtes une femme mineure.";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-507</title>
</head>
<body>
    <?php
    echo "<p>" . separatisme(19, "male") . "</p>";
    echo "<p>" . separatisme(15, "male") . "</p>";
    echo "<p>" . separatisme(22, "female") . "</p>";
    echo "<p>" . separatisme(14, "female") . "</p>";
    ?>
</body>
</html>