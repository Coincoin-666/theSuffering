<!-- User inputs variables  + Verif -->
<?php

$lname = htmlspecialchars($_POST["lname"]); // Transforme n'importe quel caractère spécial en code html (ex: &#169)
$fname = htmlspecialchars($_POST["fname"]);
$usrfile_name = $_FILES["usrfile"]["name"];
$usrfile_ext = $_FILES["usrfile"]["type"];
$usrfile_mime = mime_content_type($_FILES["usrfile"]["tmp_name"]);

$namePattern = "/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";

?>

<!-- Formulaire PHP -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-706</title>
</head>

<body>
    <div class="container m-4 align-item-center">

        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" class="row">

<!-- On place les conditions dans le formulaire pour permettre les deux affichages différents -->
            <?php
            if (preg_match($namePattern, $lname) && preg_match($namePattern, $fname) && $usrfile != "false") {
                echo "<p>Bienvenue " . $lname . " " . $fname . "!</p>";
                echo "<p>Le fichier que vous avez envoyé est: " . $usrfile_name . "</p>";
                echo "<p>Le format est " . $usrfile_ext . "</p>";
                echo "<p>Le mime est " . $usrfile_mime . "</p>";
                
            ?>
                <a href="index.php">
                    <button class="btn btn-primary">
                        Retour
                    </button></a>

            <?php

            } else {

            ?>
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
                <div class="col">
                    <label for="usrfile" class="form-label">Votre chat:</label>
                    <input type="file" name="usrfile" id="usrfile" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>

            <?php
            }
            ?>

        </form>

    </div>

</body>

</html>