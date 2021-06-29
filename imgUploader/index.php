<?php
require "controllers/controller.php";
include "assets/views/includes/header.php";
?>
<main class="container w-75 mt-3 g-3 module">
    <section class="row mt-3">
        <h1 class="fs-2 fw-light mb-3">Module d'enregistrement d'images.</h1>
        <h2 class="fs-5 fw-lighter mb-3">Mise en pratique PHP: Upload d'images.</h2>
        <div class="row m-3 justify-content-around">
            <div class="col-4 align-self-center">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data" method="POST">
                    <label for="fileToUpload" class="form-label">Veuillez choisir une image:
                        <span class="fst-italic text-danger fs-5"><?= isset($errors["wrongFormat"]) ? $errors["wrongFormat"] : "" ?></span>
                    </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="8000000">
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    <span class="fst-italic text-danger fs-5"><?= isset($errors["tooBig"]) ? $errors["tooBig"] : "" ?></span>
                    <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                </form>
            </div>
            <figure class="col-6 align-self-center">
                <img id="imgPreview">
            </figure>
        </div>
    </section>
</main>


<?php
include "assets/views/includes/footer.php";
?>