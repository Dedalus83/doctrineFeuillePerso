<?php
# create-user.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\Magie;

// Instanciation de l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $create = new Magie();
    $create->settype($_POST['type']);
    $create->setnom($_POST['nom']);
    $create->setdescription($_POST['description']);
    $create->setdegats($_POST['degats']);
    $create->setcritique($_POST['critique']);
    $create->setmalus($_POST['malus']);
    $create->setmana($_POST['mana']);
    $create->setnombre($_POST['nombre']);
    $create->seteffet($_POST['effet']);

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
        <title>Create Magie</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <br><br>
        <h1>MAGIE</h1>
        <br><br>
        <form action="" method="post">
           
           <div class="col">
               <label for="type">TYPE: </label>
               <input class="form-control form-control-lg" type="text" placeholder="TYPE" name="type" required>
           </div>
           <div class="col">
               <label for="nom">NOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="NOM" name="nom" required>
           </div>
           <div class="col">
               <label for="description">DESCRIPTION: </label>
               <input class="form-control form-control-lg" type="text" placeholder="DESCRIPTION" name="description" required>
           </div>
           <div class="col">
               <label for="degats">DEGATS: </label>
               <input class="form-control form-control-lg" type="number" placeholder="DEGATS" name="degats">
           </div>
           <div class="col">
               <label for="critique">CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="CRITIQUE" name="critique">
           </div>
           <div class="col">
               <label for="malus">MALUS: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MALUS" name="malus">
           </div>  
           <div class="col">
               <label for="mana">MANA: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MANA" name="mana" required>
           </div>  
           <div class="col">
               <label for="nombre">NOMBRE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="NOMBRE" name="nombre" required>
           </div>
           <div class="col">
               <label for="effet">EFFET: </label>
               <input class="form-control form-control-lg" type="text" placeholder="EFFET" name="effet">
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