<?php
require('template.php'); 
require('nav-categories.php');

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);

use orm\Entity\Arme;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $create = new Arme();
    $create->setqualite($_POST['qualite']);
    $create->setnom($_POST['nom']);
    $create->setdegats($_POST['degats']);
    $create->setcritique($_POST['critique']);
    $create->setresistance($_POST['resistance']);
    $create->setbonusParade($_POST['bonusParade']);
    $create->setdegatSurRes($_POST['degatSurRes']);
    $create->settauxDestruction($_POST['tauxDestruction']);
    $create->setamelioration($_POST['amelioration']);

    $entityManager->persist($create);
    $entityManager->flush();
}
?>
<div class="offset-md-2 col-md-8 offset-md-2">
<form action="" method="post">
           <h1>Enregistrez une nouvelle arme</h1>
<div class="col">
    <label for="qualite">QUALITE: </label>
    <input class="form-control form-control-lg" type="text" placeholder="QUALITE" name="qualite" required>
</div>
<div class="col">
    <label for="nom">NOM: </label>
    <input class="form-control form-control-lg" type="text" placeholder="NOM" name="nom" required>
</div>
<div class="col">
    <label for="degats">DEGATS: </label>
    <input class="form-control form-control-lg" type="number" placeholder="DEGATS" name="degats" required>
</div>
<div class="col">
    <label for="critique">CRITIQUE: </label>
    <input class="form-control form-control-lg" type="number" placeholder="CRITIQUE" name="critique" required>
</div>
<div class="col">
    <label for="resistance">RESISTANCE: </label>
    <input class="form-control form-control-lg" type="number" placeholder="RESISTANCE" name="resistance" required>
</div>  
<div class="col">
    <label for="bonusParade">BONUS DE PARADE: </label>
    <input class="form-control form-control-lg" type="number" placeholder="BONUS DE PARADE" name="bonusParade" required>
</div>  
<div class="col">
    <label for="degatSurRes">DEGATS SUR LA RESISTANCE: </label>
    <input class="form-control form-control-lg" type="number" placeholder="DEGATS SUR LA RESISTANCE" name="degatSurRes" required>
</div>  
<div class="col">
    <label for="tauxDestruction">TAUX DE DESTRUCTION: </label>
    <input class="form-control form-control-lg" type="number" placeholder="TAUX DE DESTRUCTION" name="tauxDestruction" required> 
</div>  
<div class="col">
    <label for="amelioration">AMELIORATION: </label>
    <input class="form-control form-control-lg" type="text" placeholder="AMELIORATION" name="amelioration">
</div>  
<br>
    <input class='btn btn-primary' type='submit' name='valider' value='valider'>
</form>
</div>