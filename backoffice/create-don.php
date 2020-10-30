<?php

require('template.php'); 
require('nav-categories.php');

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);

use orm\Entity\Don;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $create = new Don();
    $create->setnom($_POST['nom']);
    $create->setdescription($_POST['description']);

    $entityManager->persist($create);
    $entityManager->flush();
}
?>
<div class="offset-md-2 col-md-8 offset-md-2">
<form action="" method="post">
<h1>Enregistrez un nouveau don</h1>
<div class="col">
    <label for="nom">NOM: </label>
    <input class="form-control form-control-lg" type="text" placeholder="NOM" name="nom" required>
</div>
<div class="col">
    <label for="description">DESCRIPTION: </label>
    <input class="form-control form-control-lg" type="text" placeholder="DESCRIPTION" name="description" required>
</div>
    <br>
<input class='btn btn-primary' type='submit' name='valider' value='valider'>
</form>
</div>
    
      