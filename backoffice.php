<?php
use orm\Entity\User;

require 'template.php';
require 'function.php';


$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$userRepo = $entityManager->getRepository(User::class);
$users = $userRepo->findAll();

foreach ($users as $user) {
  $modifyActivated = $user->getChecked();
};


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["switch"]) && isset($_POST["userId"])) {
      
          $switchValue = $_POST["switch"];
          $userID = $_POST["userId"];
          $userRepo = $entityManager->getRepository(User::class);
          $user = $userRepo->find($userID);
          $user->getId($userID);
          $checkedUpdate = $user->setChecked($switchValue);
          $entityManager->persist($checkedUpdate);
          $entityManager->flush();
          Header('Location: '.$_SERVER['PHP_SELF']);
}

?>
<br><br><br><br>
<div class='container'>

<?php foreach ($users as $user) {?>
  <form action="" method="post">
    <div class="form-group">
      <p> <?=$user->getPseudo();?></p>
<?php $modifyActivated = $user->getChecked(); ?>
  <input type="hidden" name="userId" value="<?= $user->getId() ?>"/>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="switch" id="switchOn" value="1" <?= isSwitchChecked(true, $modifyActivated) ?>>
  <label class="form-check-label" for="switch">Activer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="switch" id="switchOff" value="0" <?= isSwitchChecked(false, $modifyActivated) ?>>
  <label class="form-check-label" for="switch">Désactiver</label>
</div>
<input class='btn btn-primary' type='submit' name='valider' value='valider'>
   
</form>
<?php }?>
    


