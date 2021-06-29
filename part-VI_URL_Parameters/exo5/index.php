<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>php-605</title>
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
            <a href="index.php?day=5&month=6">
                Envoi des paramètres
            </a>
        </button>

        <button class="btn btn-secondary m-2" type="button">
            <a href="index.php">Retour à l'index</a>
        </button>
    </div>
    <?php
    if (isset($_GET["day"], $_GET["month"])) {
        echo "<p>Nous sommes aujourd'hui ";
        switch ($_GET["day"]) {
            case 1:
                echo "Lundi";
                break;
            case 2:
                echo "Mardi";
                break;
            case 3:
                echo "Mercredi";
                break;
            case 4:
                echo "Jeudi";
                break;
            case 5:
                echo "Vendredi";
                break;
            case 6:
                echo "Samedi";
                break;
            case 7:
                echo "Dimanche";
                break;
            default:
                echo "Aucun jour n'est sélectionné.";
                break;
        }
        echo ", du mois de ";
        switch ($_GET["month"]) {
            case 1:
                echo "Janvier";
                break;
            case 2:
                echo "Février";
                break;
            case 3:
                echo "Mars";
                break;
            case 4:
                echo "Avril";
                break;
            case 5:
                echo "Mai";
                break;
            case 6:
                echo "Juin";
                break;
            case 7:
                echo "Juillet";
                break;
            case 8:
                echo "Août";
                break;
            case 9:
                echo "Septembre";
                break;
            case 10:
                echo "Octobre";
                break;
            case 11:
                echo "Novembre";
                break;
            case 12:
                echo "Décembre";
                break;
            default:
                echo "Aucun mois n'est sélectionné.";
                break;
        }
        echo ".</p>";
    }
    ?>
</body>

</html>