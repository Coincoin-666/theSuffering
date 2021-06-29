<?php
// Merci à la correction de Antony
$userID = filter_var($_POST["userID"], FILTER_SANITIZE_STRING);
$userPassword = filter_var($_POST["userPassword"], FILTER_SANITIZE_STRING);
setcookie("userID", $login);
setcookie("userPassword", password_hash($userPassword, PASSWORD_BCRYPT));
var_dump(password_verify($userPassword, $_COOKIE["pwd"]));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-803</title>
</head>

<body>
    <main class="container p-3">
        <div class="row align-item-center">
            <form action="user.php" method="post" class="border border-dark col">
                <label for="userID" class="form-label m-1">Votre Identifiant:</label>
                <input type="text" name=userID id="userID" class="form-control" placeholder="Identifiant">
                <p class="form-text">On va stocker tout ça dans un cookie, mais c'est pour apprendre, en vrai on n'aime pas trop les cookies.</p>
                <label for="password" class="form-label m-1">Votre Mot-de-Passe:</label>
                <input type="password" name=userPassword id="userPassword" class="form-control" placeholder="MotDePasse">
                <p class="form-text">Pareil. Façon les cookies c'est juste bon à manger.</p>
                <button type="submit" class="btn btn-primary m-1">Connexion<button>
            </form>
        </div>
        <?php
        if (isset($_COOKIE["cookie"])) {
            echo "$name : $value \n";
        }
        ?>
    </main>
</body>

</html>