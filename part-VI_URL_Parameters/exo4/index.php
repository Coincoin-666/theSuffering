<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-604</title>
    <style>
        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center p-3 m-3 border border-dark">
        <button class="btn btn-primary m-2" type="button">
            <a href="index.php?language=PHP&server=MAMP">
                Envoi des paramètres
            </a>
        </button>

        <button class="btn btn-secondary m-2" type="button">
            <a href="index.php">Retour à l'index</a>
        </button>
    </div>
    <?php
    if (isset($_GET["language"], $_GET["server"])) {
    ?>

        <p><?= "Langage choisi: " . $_GET["language"] ?></p>
        <p><?= "Environnement de développement: " . $_GET["server"] ?></p>

    <?php
    } else {
        ?>

        <p><?= "Merci de sélectionner un langage et un environnement de développement." ?></p>

        <?php
    }
    ?>
</body>

</html>