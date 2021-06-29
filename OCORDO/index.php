<?php
$xml = simplexml_load_file("assets/views/source.xml");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ocordo</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light d-flex container justify-content-evenly p-2 mb-3 mt-0 w-75 border rounded-3 border-primary">
        <button class="btn btn-outline-primary" type="button">
            <a class="nav-link text-decoration-none" href="accueil">Accueil</a>
        </button>
        <button class="btn btn-outline-primary" type="button">
            <a class="nav-link text-decoration-none" href="apropos">À Propos</a>
        </button>
        <button class="btn btn-outline-primary" type="button">
            <a class="nav-link text-decoration-none" href="temoignages">Témoignages</a>
        </button>
        <button class="btn btn-outline-primary" type="button">
            <a class="nav-link text-decoration-none" href="contact">Contact</a>
        </button>
    </nav>

    <div class="container justify-content-center w-75">
        <?php
        if (isset($_GET["id"])) {
            switch ($_GET["id"]) {
                case 1:
                    $content = $xml->page[0]->content;
                    echo $content;
                    break;
                case 2:
                    $content = $xml->page[1]->content;
                    echo $content;
                    break;
                case 3:
                    $content = $xml->page[2]->content;
                    echo $content;
                    break;
                case 4:
                    $content = $xml->page[3]->content;
                    echo $content;
                    break;
                default:
                    echo "error";
                    break;
            }
        } else {
            $content = $xml->page[0]->content;
            echo $content;
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>