<?php
// Exo 6 - Formulaires - Refaisage de l'exo avec la correction de Nico parce que franchement c'est pas facile quand même.
// Mode super secure.

// Function to sanitize user data:
function sanitizeData($data)
{
    $newData = strtolower($data);   // string to lower case
    $newData = trim($newData);      // trim() = remove spaces before and after the input
    $newData = ucfirst($newData);   // UpperCase First character
    $newData = htmlspecialchars($newData);  // 1st security layer: disable special characters potentially dangerous (> ! < ; @ etc.)
    return $newData;    // Return the sanitized data so we can use it as a variable.
}

// Define a condition to enable the validation of the user inputs, which reads, in (french) human language:
// "SI la méthode utilisée pour communiquer avec le serveur est 'post' (=  if($_SERVER)["REQUEST_METHOD"] == "POST" ), ET QUE  le nombre de valeur dans la superglobale $_POST est sup. à 0( count($_POST) > 0 ), fait ça:"
if ($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0) {
    $errors = [];   // Empty array to store possible user errors.
    $finalData = []; // Empty array to store valid data AFTER they went through the tests.
    // The following array_map() function allows to apply a function to all the elements in an array.
    // Here it comes very handy as we can clean all user inputs in 1 line of code by initializing a new array with the clean data.
    $sanitizedData = array_map("sanitizeData", $_POST);
    // The extract function allows to exctract all info from an array and give them the index name they were assigned to as a variable name.
    // So, a data stored as $_POST["lastname"] would become $lastname.
    extract($sanitizedData);

    // Gender "validation" (omg, i'm so sorry for that...)
    $gendersArray = ["Madame", "Monsieur", "Non Défini"];
    // VALIDATION GOES FROM THE MOST GENERAL TO THE MOST SPECIFIC:  ▼
    // 1. Field is empty
    // 2. Incorrect value
    // 3. Correct value
    if (empty($civility)) {
        $errors["civility"] = "Veuillez sélectionner votre civilité.";
    } else if (!in_array($gendersArray, $civility)) {
        // To check that the user doesn't type anything, we check if the entry IS NOT in the array, that way we can display the error msg.
        $errors["civility"] = "Veuillez sélectionner un choix de la liste.";
    } else {
        $finalData["civility"] = $civility;
    }

    // First and last name input verification:
    // Regex we use to verify the entry.
    $namePattern = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/"; // Thx Nico. And the Internet.
    // Then we procede to the verification IN THE SAME ORDER THAN BEFORE – FROM THE MOST GENERAL TO THE MOST SPECIFIC:  ▼
    // Lastname verif.
    if (empty($lastname)) {
        $errors["lastname"] = "Veuillez renseigner votre nom.";
    } else if (!preg_match($namePattern, $lastname)) {
        // IF the input DOES NOT match the pattern...
        $errors["lastname"] = "Merci de renseigner un nom valide.";
    } else {
        $finalData["lastname"] = $lastname;
    }

    // Firstname verif.
    if (empty($firstname)) {
        $errors["firstname"] = "Veuillez renseigner votre prénom.";
    } else if (!preg_match($namePattern, $firstname)) {
        $errors["firstname"] = "Merci de renseigner un prénom valide.";
    } else {
        $finalData["firstname"] = $firstname;
    }
}
?>

<!-- And now, the proper form. Note that everything on the top of this line should go in a controller.php file. -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SecureForm</title>
</head>

<body>

    <!-- Display data if everything ok -->
    <?php
    if (count($finalData) > 0 && count($errors) == 0) {
    ?>
        <div class="container w-60">
            <p>Merci de vérifier vos informations:</p>
            <ul>
                <li>Civilité: <?= $finalData["civility"]; ?></li>
                <li>Nom: <?= $finalData["lastname"]; ?></li>
                <li>Prénom: <?= $finalData["firstname"]; ?></li>
            </ul>
        </div>
    <?php
    } else {
    ?>
        <!-- OR IF IT'S NOT OK, we display the form so the user can enter their info. Obviously. -->
        <div class="container w-50 border border-primary">
            <form action="index.php" method="POST">
                <div class="m-3">
                    <label for="civility" class="form-label">
                        Civilité:
                    </label>
                    <select name="civility" class="form-select">
                        <option selected class="text-muted">Choix ci-dessous</option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Non Défini">Non Défini</option>
                    </select>

                    <div class="m-3">
                        <label for="lastname" class="form-label">Nom:</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Flabagadaga">
                    </div>
                    <div class="m-3">
                        <label for="firstname" class="form-label">Prénom:</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Michel">
                    </div>
                </div>
                <button type="submit" class="btn btn-success m-3">Valider</button>
            </form>
        </div>
    <?php
    }
    ?>
    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>