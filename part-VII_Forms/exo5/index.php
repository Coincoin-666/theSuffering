<?php

// RegExp Pattern
$namePattern = "/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";

// User input variables
$fname = htmlspecialchars(trim($_POST["fname"]));
$lname = htmlspecialchars(trim($_POST["lname"]));

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-705</title>
</head>

<body>
    <div class="container m-4 align-item-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row">
            <div class="col">
                <label for="gender" class="form-label"></label>
                <select name="gender" id="gender" class="form-select">
                    <option value="default" selected>Fier d'être...</option>
                    <option value="male">Mâle</option>
                    <option value="female">Femelle</option>
                    <option value="mixed">FeMâle</option>
                    <option value="animal">Animal</option>
                    <option value="nonEarthian">Non-Terrestre</option>
                    <option value="god">God</option>
                </select>
            </div>
            <div class="col">
                <label for="lname" class="form-label">Votre nom:</label>
                <input type="text" name="lname" id="lname" placeholder="Michel" class="form-control">
            </div>
            <div class="col">
                <label for="fname" class="form-label">Votre prénom:</label>
                <input type="text" name="fname" id="fname" placeholder="LeVrai" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
            <?php
            if (preg_match($namePattern, $lname) && preg_match($namePattern, $fname)) {
                echo "<p>Bienvenue " . $lname . " " . $fname . "!</p>";
            } else {
                echo "<p>Nom d'utilisateur inconnu.</p>";
            }
            ?>
        </form>

    </div>

</body>

</html>