<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-202</title>
</head>
<body>
    <?php

    $isEasy = false;

    if ($isEasy == true) {
        echo "C'est facile!!";
    } else {
        echo "C'est difficile!!!";
    }

    $isEasy ? "C'est facile!" : "C'est difficile!";

    ?>
</body>
</html>