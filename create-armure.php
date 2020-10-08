<?php
# create-user.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\Armure;

// Instanciation de l'utilisateur

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $create = new Armure();
    $create->setqualite($_POST['qualite']);
    $create->setnom($_POST['nom']);
    $create->setvie($_POST['vie']);
    $create->setresilience($_POST['resilience']);
    $create->setresistance($_POST['resistance']);
    $create->setmalusEsquive($_POST['malusEsquive']);
    $create->setamelioration1($_POST['amelioration1']);
    $create->setamelioration2($_POST['amelioration2']);
    $create->setamelioration3($_POST['amelioration3']);

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
        <h1>ARMURE</h1>
        <br><br>
        <form action="" method="post">
           
           <div class="col">
               <label for="qualite">QUALITE: </label>
               <input class="form-control form-control-lg" type="text" placeholder="QUALITE" name="qualite" required>
           </div>
           <div class="col">
               <label for="nom">NOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="NOM" name="nom" required>
           </div>
           <div class="col">
               <label for="vie">VIE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="VIE" name="vie" required>
           </div>
           <div class="col">
               <label for="resilience">RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="RESILIENCE" name="resilience" required>
           </div>
           <div class="col">
               <label for="resistance">RESISTANCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="RESISTANCE" name="resistance" required>
           </div>  
           <div class="col">
               <label for="malusEsquive">MALUS D'ESQUIVE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MALUS D'ESQUIVE" name="malusEsquive" required>
           </div>  
           <div class="col">
               <label for="amelioration1">PREMIERE AMELIORATION: </label>
               <input class="form-control form-control-lg" type="text" placeholder="PREMIERE AMELIORATION" name="amelioration1">
           </div>  
           <div class="col">
               <label for="amelioration2">SECONDE AMELIORATION: </label>
               <input class="form-control form-control-lg" type="text" placeholder="SECONDE AMELIORATION" name="amelioration2">
           </div>  
           <div class="col">
               <label for="amelioration3">TROISIEME AMELIORATION: </label>
               <input class="form-control form-control-lg" type="text" placeholder="TROISIEME AMELIORATION" name="amelioration3">
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