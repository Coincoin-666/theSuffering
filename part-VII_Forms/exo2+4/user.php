<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-702_usr</title>
</head>

<body>
    <p>Nom: <?php
            if (htmlspecialchars($_POST["lname"])) {
                echo $_POST["lname"];
            }

            ?>
    </p>
    <p>Prénom: <?php
                if (htmlspecialchars($_POST["fname"])) {
                    echo $_POST["fname"];
                }
                ?>
    </p>
</body>

</html>