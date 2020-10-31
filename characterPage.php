<?php
session_start();
require('data-controller-character.php');
require('function.php');

Use orm\service\CharacterSheetService;
?>
<!DOCTYPE html>
<html lang='fr'>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PERSONNAGE</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="asset/style.scss">
   </head>
<body>

   <div class="container">
   <?php require('header.php') ?>
        <br><br>
     
<h1>PERSONNAGE: <?php echo $_SESSION['pseudo'] ?></h1>
<input type="hidden" id="result">
   
  <div class="row">
<div class="tabs">
    <ul class="nav nav-tabs">
    </ul>

  <div class="tab" data-title="Personnage">
    <?php require("get-main-character.php");?>
 </div>

 <div class="tab" data-title="Stats Physique">
    <?php require("get-physical-character.php");?>
 </div>

 <div class="tab" data-title="Stats Magique">
     <?php require("get-magic-character.php");?> 
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_MAGIE ?>">
 <form method="post">
         <div class="form-group">
            <select class="form-control" id="Select" name="value">
               <option>Ajoutez une magie</option>     
            <?php foreach ($magics as $magic) {?>
               <option value= "<?=$magic->getId()?>" ><?=$magic->getType()?>: <?=$magic->getNom()?></option>
            <?php }?>
            </select>
      <button class='btn btn-primaryCustom' type='submit' name='validate' value='valider'>Ajouter une Magie</button>
         </div>
     </form>
    <?php require("get-magie.php");?>  
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_COMPETENCE ?>">
 <form method="post">
        <div class="form-group">
           <select class="form-control" name="value">
            <option>Ajoutez une compétence</option>     
               <?php foreach ($skills as $skill) {?>
                <option value= "<?=$skill->getId()?>"> <?=$skill->getNom()?></option>
              <?php }?>
           </select>
         <button class='btn btn-primaryCustom' type='submit' name='validateSkill' value='valider'>Ajouter une Compétence</button>
      </div>
   </form>
    <?php require("get-competence.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_DON ?>">
 <form method="post">
      <div class="form-group">
         <select class="form-control" name="value">
            <option>Ajoutez un don</option>     
         <?php foreach ($gifts as $gift) {?>
            <option value= "<?=$gift->getId()?>"> <?=$gift->getNom()?></option>
         <?php }?>
         </select>
         <button class='btn btn-primaryCustom' type='submit' name='validateGift' value='valider'>Ajouter un Don</button>
      </div>
   </form>
    <?php require("get-don.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_ARME ?>">
 <form method="post">
      <div class="form-group">
         <select class="form-control" name="value">
            <option>Ajoutez une arme</option>     
         <?php foreach ($weapons as $weapon) {?>
            <option value= "<?=$weapon->getId()?>"> <?=$weapon->getNom()?></option>
         <?php }?>
         </select>
         <button class='btn btn-primaryCustom' type='submit' name='validateWeapon' value='valider'>Ajouter une Arme</button>
      </div>
   </form>
    <?php require("get-arme.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_ARMURE ?>">
 <form method="post">
      <div class="form-group">
         <select class="form-control" name="value">
            <option>Ajoutez une armure</option>     
         <?php foreach ($armors as $armor) {?>
            <option value= "<?=$armor->getId()?>"> <?=$armor->getNom()?></option>
         <?php }?>
         </select>
         <button class='btn btn-primaryCustom' type='submit' name='validateArmor' value='valider'>Ajouter une Armure</button>
      </div>
   </form>
    <?php require("get-armure.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_ARGENT ?>">
    <?php require("get-argent.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_INVENTAIRE ?>">
 <form method="post">
      <div class="form-group">
         <select class="form-control" name="value">
            <option>Ajoutez un objet</option>     
         <?php foreach ($inventories as $inventory) {?>
            <option value= "<?=$inventory->getId()?>"> <?=$inventory->getNom()?></option>
         <?php }?>
         </select>
         <button class='btn btn-primaryCustom' type='submit' name='validateInventory' value='valider'>Ajouter un Objet</button>
      </div>
   </form>
    <?php require("get-inventaire.php");?>
 </div>

 <div class="tab" data-title="<?= CharacterSheetService::TAB_CONTACT ?>">
    <?php require("get-contact.php");?>
 </div>
 
 <div class="tab" data-title="<?= CharacterSheetService::TAB_NOTEBOOK ?>">
    <?php require("get-notebook.php");?>
 </div>

</div>  
</div> 
</div>
         
      <script src='transform.js'></script>
      <script src='modifyScript.js'></script>
      <script src="sse.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>