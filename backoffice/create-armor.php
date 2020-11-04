<?php

require('template.php'); 
require('nav-categories.php');

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);

use orm\Entity\Armure;

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

    $entityManager->persist($create);
    $entityManager->flush();
}
?>
<div class="offset-md-2 col-md-8 offset-md-2">
<form action="" method="post">
<h1>Enregistrez une nouvelle armure</h1>
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