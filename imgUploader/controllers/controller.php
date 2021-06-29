<?php
require "tools/fcts.php";

// Déclaration de variables
// Dossier où seront stockées les images
$img_dir = "assets/img/";
// Array des différents formats acceptés
$validImages = [
    "image/png",
    "image/jpeg",
    "image/gif"
];

// Vérif du fichier envoyé + déplacement dans le bon dossier
if ($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0) {
    $errors = [];
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != NULL && $_FILES["fileToUpload"]["error"] == 0) {
        $fileInfo = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
        if (!in_array($fileInfo, $validImages)) {
            $errors["wrongFormat"] = "Merci de n'envoyer que des images aux formats acceptés: jpg, png, gif";
        } else if ($_FILES["fileToUpload"]["size"] > 8000000) {
            $errors["tooBig"] = "Merci de n'envoyer que des images dont la taille est inférieure à 8 Mo";
        } else {
            $img = renameImg($_FILES["fileToUpload"]["name"]);
            move_uploaded_file(($_FILES["fileToUpload"]["tmp_name"]), $img_dir . $img);
        }
    } else if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != NULL && $_FILES["fileToUpload"]["error"] == 2) {
        $errors["tooBig"] = "Merci de n'envoyer que des images dont la taille est inférieure à 8 Mo";
    }
} 

// move_uploaded_file() agit comme copy, donc erreur si le 2ème paramètre est un dossier:
// il ne voudra pas écraser un dossier avec un fichier = donc concaténation avec le nom de l'image
// pour suivre la nomination des directories classiques:  dossier1/file1/