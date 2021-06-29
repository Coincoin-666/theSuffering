<?php
    function greetings($age, $fname, $lname) {
        return "Bonjour " . $fname . " " . $lname . ", tu as " . $age . " ans? Et ben...";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-506</title>
</head>
<body>
    <?php
    echo greetings(77, "Marlène", "Na-Pasfécaca");
    ?>
</body>
</html>