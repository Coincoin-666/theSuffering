<!-- Exo7&8 -->
<!-- 7/ Ajouter un champ d'envoi de fichier et afficher le nom et l'extension du fichier. -->
<!-- 8/ Vérifier que le fichier envoyé est bien un pdf. -->
<?php
// 1st method:
// Which I absolutely don't understand. It returns the path to the tmp folder.
// if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != NULL) {
//     $fileInfo = explode(".", $_FILES["fileToUpload"]["tmp_name"]);
//     var_dump($fileInfo);
// }

// 2nd method:
if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != NULL) {
    // The mime_content_type() functions allows to check the real type of the file.
    $fileInfo = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
    // So IF NOT pdf 
    if($fileInfo != "application/pdf") {
        $error = "Merci de n'envoyer que des fichier au format pdf.";
    } else {
        $success = "Bravo.";
    }
}

// NOTE TO SELF: Ok c'est génial ça a l'air de fonctionner mais je comprends quand même pas pourquoi j'ai toujours autant d'erreur qui s'affichent.
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>fileTypeVerif</title>
</head>

<body>
    <div class="container w-60 border border-primary m-3">
        <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload" class="form-label m-3">Envoi de fichier:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" placeholder="Parcourir...">
    <button type="submit" class="btn btn-primary m-3">Envoyer</button>
    </form>
    <!-- <p>Le fichier s'appelle <?= $fileInfo[0]; ?> et son extension est <?= $fileInfo[1]; ?></p> -->
    <p>Le fichier s'appelle <?= $fileInfo["filename"]; ?> et son extension est <?= $fileInfo["extension"]; ?></p>
    <?= isset($error) ? $error : $success ?>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>