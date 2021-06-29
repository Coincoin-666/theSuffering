<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-801</title>
</head>

<body>
    <div class="container m-4 align-item-center">
        <h1>SUUUUUUPAAAAAAGURUBARUUUUUUUUUUU!!!!</h1>
        <div class="row">
            <p>User Agent:
                <?php

                echo $_SERVER['HTTP_USER_AGENT'];

                ?>
            </p>
        </div>
        <div class="row">
            <p>Adresse IP:
                <?php

                echo $_SERVER['REMOTE_ADDR'];

                ?>
            </p>
        </div>
        <div class="row">
            <p>Nom du serveur:
                <?php

                echo $_SERVER['SERVER_NAME'];

                ?>
            </p>
        </div>
    </div>

</body>

</html>