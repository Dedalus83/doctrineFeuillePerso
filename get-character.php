
<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\Character;

$characterRepo = $entityManager->getRepository(Character::class);

$character = $characterRepo->find(1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fieldName = $_POST["fieldName"];
    $fieldValue = $_POST[$fieldName];
    $setterName = "set" . ucfirst($fieldName);

    $character->$setterName($fieldValue);
    $entityManager->persist($character);
    $entityManager->flush();
}
?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PERSONNAGE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container">
        <br><br>
        <h1>PERSONNAGE</h1>
        <br><br>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="false">
    <h2>Caractéristiques Principales</h2>
      <div class="col">
            <p>Nom: <span data-dynamic-input="nom" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getNom())?> </span></p>
            <p>Prenom: <span data-dynamic-input="prenom" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getPrenom())?></span></p>
            <p>Age: <span data-dynamic-input="age" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getAge())?></span></p>
            <p>Race: <span data-dynamic-input="race" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getRace())?></span></p>
            <p>Sexe: <span data-dynamic-input="sexe" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getSexe())?></span></p>
            <p>Taille: <span data-dynamic-input="taille" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getTaille())?></span></p>
            <p>Poids: <span data-dynamic-input="poids" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getPoids())?></span></p>
            <p>Yeux: <span data-dynamic-input="yeux" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getYeux())?></span></p>
            <p>Cheveux: <span data-dynamic-input="cheveux" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getCheveux())?></span></p>
            <p>Rang: <span data-dynamic-input="rang" data-dynamic-type="string" data-dynamic-entity="Character"><?=htmlentities($character->getRang())?></span></p>
      </div>
    </div>
    <div class="carousel-item" data-interval="false">
    <h2>Caractéristiques Physiques</h2>
            <p>Vie: <span data-dynamic-input="vie" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getVie())?></span></p>
            <p>Force: <span data-dynamic-input="force" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getForce())?></span></p>
            <p>Mana: <span data-dynamic-input="mana" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getMana())?></span></p>
            <p>Puissance: <span data-dynamic-input="puissance" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getPuissance())?></span></p>
            <p>Precis: <span data-dynamic-input="precis" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getPrecis())?></span></p>
            <p>Initiative: <span data-dynamic-input="initiative" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getInitiative())?></span></p>
            <p>Agilite: <span data-dynamic-input="agilite" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getAgilite())?></span></p>
            <p>Mental: <span data-dynamic-input="mental" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getMental())?></span></p>
            <p>Intelligence: <span data-dynamic-input="intelligence" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getIntelligence())?></span></p>
            <p>Volonte: <span data-dynamic-input="volonte" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getVolonte())?></span></p>
            <p>Perception: <span data-dynamic-input="perception" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getPerception())?></span></p>
            <p>Maitrise: <span data-dynamic-input="maitrise" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getMaitrise())?></span></p>
            <p>Parade: <span data-dynamic-input="parade" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getParade())?></span></p>
            <p>Esquive: <span data-dynamic-input="esquive" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getEsquive())?></span></p>
            <p>Bloque: <span data-dynamic-input="bloque" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getBloque())?></span></p>
            <p>Encaissement: <span data-dynamic-input="encaissement" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getEncaissement())?></span></p>
            <p>Resilience: <span data-dynamic-input="resilience" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getResilience())?></span></p>
            <p>Critique: <span data-dynamic-input="critique" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getCritique())?></span></p>
    </div>
    <div class="carousel-item" data-interval="false">
    <h2>Caractéristiques Magiques</h2>
            <p>MagRedRes: <span data-dynamic-input="magRedRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagRedRes())?></span></p>
            <p>MagWhiteRes: <span data-dynamic-input="magWhiteRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagWhiteRes())?></span></p>
            <p>MagBlueRes: <span data-dynamic-input="magBlueRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagBlueRes())?></span></p>
            <p>MagGreenRes: <span data-dynamic-input="magGreenRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagGreenRes())?></span></p>
            <p>MagBlackRes: <span data-dynamic-input="magBlackRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagBlackRes())?></span></p>
            <p>MagPrismRes :<span data-dynamic-input="magPrismRes" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagPrismRes())?></span></p>
            <p>MagRedCrit: <span data-dynamic-input="magRedCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagRedCrit())?></span></p>
            <p>MagWhiteCrit: <span data-dynamic-input="magWhiteCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagWhiteCrit())?></span></p>
            <p>MagBlueCrit: <span data-dynamic-input="magBlueCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagBlueCrit())?></span></p>
            <p>MagGreenCrit: <span data-dynamic-input="magGreenCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagGreenCrit())?></span></p>
            <p>MagBlackCrit: <span data-dynamic-input="magBlackCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagBlackCrit())?></span></p>
            <p>MagPrismCrit: <span data-dynamic-input="magPrismCrit" data-dynamic-type="number" data-dynamic-entity="Character"><?=htmlentities($character->getmagPrismCrit())?></span></p>
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