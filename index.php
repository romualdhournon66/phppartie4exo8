<?php

//déclaration de la fonction
function functionAdd($number1 = 150, $number2 = 3800, $number3 = 4335) {
    $result = $number1 + $number2 + $number3;
    return $result;
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 8</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 8</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</p>
                    <p class="text">Tous les paramètres doivent avoir une valeur par défaut.</p>
                </div>
<?= functionAdd(); // Affichage du resultat de ma fonction ?>

            </div>
        </div>
    </body>
</html>


