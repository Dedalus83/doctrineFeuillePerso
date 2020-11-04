<?php

require('template.php'); 
require('nav-categories.php');

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);

use orm\Entity\Magie;

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

    $entityManager->persist($create);
    $entityManager->flush();
}
?>
<div class="offset-md-2 col-md-8 offset-md-2">
<form action="" method="post">
<h1>Enregistrez une nouvelle magie</h1>
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