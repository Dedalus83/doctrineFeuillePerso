<?php


require('template.php'); 
require('nav-categories.php');

use orm\Entity\User;
Use orm\Entity\Character;

require('../function.php');

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../bootstrap.php']);

$userRepo = $entityManager->getRepository(User::class);
$users = $userRepo->findAll();


?>

<div class="offset-md-2 col-md-8 offset-md-2">
<?php foreach ($users as $user) {
  $pseudo = $user->getCharacter();
  echo $pseudo->getPseudo;
  
};?>
</div>