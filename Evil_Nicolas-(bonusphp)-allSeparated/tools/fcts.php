<?php
// Fonctions php

function renameImg() {
    $ext = explode(".", $_FILES["fileToUpload"]["name"]);
    $newImgName = uniqid() . "." . $ext[1];
    return $newImgName;
}


// uniqid() renvoie une chaine de 13 caractères, sans extension.
// explode() créé une array, d'où la récup de la valeur à l'index[1].