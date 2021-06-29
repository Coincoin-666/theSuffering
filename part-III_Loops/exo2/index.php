<?php
    $num_1;
    $num_2 = 44;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-302</title>
</head>
<body>
    
    <?php

    for ($num_1 = 0; $num_1 < 21; $num_1 ++) { 
        $result = $num_1 * $num_2;
        echo $result, "<br>";
    }

    ?>
</body>
</html>