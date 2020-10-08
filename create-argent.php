<?php
# create-user.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\Argent;

// Instanciation de l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $create = new Argent();
    $create->setgold($_POST['gold']);
    $create->setplatine($_POST['platine']);
    $create->setmithril($_POST['mithril']);
    $create->setdragon($_POST['dragon']);
    $create->setthrone($_POST['throne']);
    $create->setplacement($_POST['placement']);

    // Gestion de la persistance
    $entityManager->persist($create);
    $entityManager->flush();

    // Vérification du résultats
    echo "Identifiant de l'utilisateur créé : ", $create->getId();
}
?>

<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Create argent</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <br><br>
        <h1>INFORMATION FINANCIERE</h1>
        <br><br>
        <form action="" method="post">
           
           <div class="col">
               <label for="gold">OR: </label>
               <input class="form-control form-control-lg" type="number" placeholder="OR" name="gold">
           </div>
           <div class="col">
               <label for="platine">PLATINE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PLATINE" name="platine">
           </div>
           <div class="col">
               <label for="mithril">MITHRIL: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MITHRIL" name="mithril">
           </div>
           <div class="col">
               <label for="dragon">DRAGON: </label>
               <input class="form-control form-control-lg" type="number" placeholder="DRAGON" name="dragon">
           </div>
           <div class="col">
               <label for="trhone">THRONE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="THRONE" name="throne">
           </div>  
           <div class="col">
               <label for="placement">PLACEMENT: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PLACEMENT" name="placement">
           </div>  
           <br>
           <input class='btn btn-primary' type='submit' name='valider' value='valider'>
        </form>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    </body>
</html>