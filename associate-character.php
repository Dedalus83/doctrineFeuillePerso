<?php
session_start();
include 'data-controller-character.php';
include 'function.php';

?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PERSONNAGE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.css">
    </head>

    <body>
    <div class="container">

        <br><br>
        <h1>PERSONNAGE de <?php echo $_SESSION['pseudo'] ?></h1>
        <br><br>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="false">
    <h2>Caractéristiques Principales</h2>
      <div class="col">
         <?php include "get-main-character.php";?>
      </div>
    </div>
    <div class="carousel-item" data-interval="false">
    <h2>Caractéristiques Physiques</h2>
          <?php include "get-physical-character.php";?>
    </div>
    <div class="carousel-item" data-interval="false">
    <h2>Caractéristiques Magiques</h2>
         <?php include "get-magic-character.php";?>
    </div>
    <div class="carousel-item" data-interval="false">

    <h2>Pouvoirs Magiques</h2>
         <?php include "get-magie.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" id="Select" name="value">
                  <option>Ajoutez une magie</option>     
               <?php foreach ($magics as $magic) {?>
                  <option value= "<?=$magic->getId()?>" > <?=$magic->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validate' value='valider'>
          </div>
         </form>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Compétences</h2>
         <?php include "get-competence.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" name="value">
                  <option>Ajoutez une compétence</option>     
               <?php foreach ($skills as $skill) {?>
                  <option value= "<?=$skill->getId()?>"> <?=$skill->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validateSkill' value='valider'>
          </div>
         </form>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Dons Raciaux</h2>
         <?php include "get-don.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" name="value">
                  <option>Ajoutez un don</option>     
               <?php foreach ($gifts as $gift) {?>
                  <option value= "<?=$gift->getId()?>"> <?=$gift->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validateGift' value='valider'>
          </div>
         </form>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Armes</h2>
         <?php include "get-arme.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" name="value">
                  <option>Ajoutez une arme</option>     
               <?php foreach ($weapons as $weapon) {?>
                  <option value= "<?=$weapon->getId()?>"> <?=$weapon->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validateWeapon' value='valider'>
          </div>
         </form>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Armures</h2>
         <?php include "get-armure.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" name="value">
                  <option>Ajoutez une armure</option>     
               <?php foreach ($armors as $armor) {?>
                  <option value= "<?=$armor->getId()?>"> <?=$armor->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validateArmor' value='valider'>
          </div>
         </form>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Informations Bancaires</h2>
         <?php include "get-argent.php";?>
    </div>

    <div class="carousel-item" data-interval="false">
    <h2>Inventaire</h2>
         <?php include "get-inventaire.php";?>
         <form method="post">
          <div class="form-group">
                <select class="form-control" name="value">
                  <option>Ajoutez un objet</option>     
               <?php foreach ($inventories as $inventory) {?>
                  <option value= "<?=$inventory->getId()?>"> <?=$inventory->getNom()?></option>
               <?php }?>
                </select>
                <input class='btn btn-primary' type='submit' name='validateInventory' value='valider'>
          </div>
         </form>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <script src='modifyScript.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>