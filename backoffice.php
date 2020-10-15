<?php
use orm\Entity\User;

require 'template.php';
require 'function.php';

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$userRepo = $entityManager->getRepository(User::class);
$user = $userRepo->findAll();

foreach ($user as $users) {
  $modifyActivated = $users->getChecked();
};


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["switch"])){
  $switchValue = $_POST["switch"];
  foreach ($user as $users) {
    $checkedUpdate = $users->setChecked($switchValue);
    $entityManager->persist($checkedUpdate);
    $entityManager->flush();
  };
}



?>
<br><br><br><br>
<div class='container'>
<form action="#" method="post">

<?php foreach ($user as $users) {?>

<div class="form-group">

<p> <?=$users->getPseudo();?></p>
   
<?php }?>
    
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="switch" id="switchOn" value="true" <?= isSwitchChecked(true, $modifyActivated) ?>>
  <label class="form-check-label" for="switch">Activer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="switch" id="switchOff" value="false" <?= isSwitchChecked(false, $modifyActivated) ?>>
  <label class="form-check-label" for="switch">Désactiver</label>
</div>
<input class='btn btn-primary' type='submit' name='valider' value='valider'>

</form>
