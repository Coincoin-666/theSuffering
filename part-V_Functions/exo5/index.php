<?php
function passwd($pass, $word)
{
    return $pass . $word;
};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-505</title>
</head>
<body>
    <?php
    echo passwd(89768909786787987, "PaYËTonMaux2Pas\$E");
    ?>
</body>
</html>