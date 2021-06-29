<?php
    $HDF = array(
        "02"=>"Aisne",
        "59"=>"Nord",
        "60"=>"Oise",
        "62"=>"Pas-de-Calais",
        "80"=>"Somme"
    );

    $HDF_length = count($HDF);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-402</title>
</head>
<body>
    
    <?= $HDF["59"] ?>

    <?php 
        $HDF["52"] = "marne";

        foreach($HDF as $dpt_number=>$dpt_name) {
            echo "$dpt_name"; 
        }

        // foreach ($HDF as $x => $x_value) {
        //     echo "<p>$x" . ": " . "$x_value</p>";
        // }
            var_dump($HDF);
        foreach ($HDF as $dpt_number => $dpt_name) {
            echo "<p>Le département numéro " . "$dpt_number" . " se nomme " . "$dpt_name" . ".</p>";
        }
    ?>

</body>
</html>