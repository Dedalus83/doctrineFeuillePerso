<?php

use orm\Entity\Argent;
use orm\Entity\Arme;
use orm\Entity\Armure;
use orm\Entity\Character;
use orm\Entity\Competence;
use orm\Entity\Don;
use orm\Entity\Inventaire;
use orm\Entity\Magie;
use orm\Entity\CharacterMagie;
use orm\Entity\CharacterCompetence;
use orm\Entity\CharacterDon;
use orm\Entity\CharacterArme;
use orm\Entity\CharacterArmure;
use orm\Entity\CharacterInventaire;
use orm\Entity\User;

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

$userRepo = $entityManager->getRepository(User::class);
$user = $userRepo->find($_SESSION['id']);

$characters = $user->getCharacter();

$character = $characters[0];

$armures = clone $character->getCharacterArmure();

$armes = clone $character->getCharacterArme();

$dons = clone $character->getCharacterDon();

$competences = clone $character->getCharacterCompetence();

$inventaires = clone $character->getCharacterInventaire();

$magies = clone $character->getCharacterMagie();

$argents = $character->getArgent();

$magieRepo = $entityManager->getRepository(Magie::class);
$magics = $magieRepo->findAll();

$competenceRepo = $entityManager->getRepository(Competence::class);
$skills = $competenceRepo->findAll();

$donRepo = $entityManager->getRepository(Don::class);
$gifts = $donRepo->findAll();

$armeRepo = $entityManager->getRepository(Arme::class);
$weapons = $armeRepo->findAll();

$armureRepo = $entityManager->getRepository(Armure::class);
$armors = $armureRepo->findAll();

$inventaireRepo = $entityManager->getRepository(Inventaire::class);
$inventories = $inventaireRepo->findAll();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST['validate']))
        {
          $value = $_POST['value'];
          $characterMagieRepo = $entityManager->getRepository(CharacterMagie::class);
          $characterMagie = $characterMagieRepo->findAll();
        
          $magieRepo = $entityManager->getRepository(Magie::class);
          $magie = $magieRepo->find($value);
        
          $characterMagie = new CharacterMagie;
        
          $characterMagie->copyFrom($magie);
          $characterMagie->setCharacter($character);
          $characterMagie->setMagie($magie);
          $entityManager->persist($characterMagie);
          $entityManager->flush();
       }
       elseif (isset($_POST['validateSkill']))
        {
          $value = $_POST['value'];
          $characterCompetenceRepo = $entityManager->getRepository(CharacterCompetence::class);
          $characterCompetence = $characterCompetenceRepo->findAll();

          $competenceRepo = $entityManager->getRepository(Competence::class);
          $competence = $competenceRepo->find($value);
            
          $characterCompetence = new CharacterCompetence;
        
          $characterCompetence->copyFrom($competence);
          $characterCompetence->setCharacter($character);
          $characterCompetence->setCompetence($competence);
          $entityManager->persist($characterCompetence);
          $entityManager->flush();
        }
       elseif(isset($_POST['validateArmor']))
       {
        $value = $_POST['value'];
        $characterArmureRepo = $entityManager->getRepository(CharacterArmure::class);
        $characterArmure = $characterArmureRepo->findAll();
    
        $armureRepo = $entityManager->getRepository(Armure::class);
        $armure = $armureRepo->find($value);
    
        $characterArmure = new CharacterArmure;
    
        $characterArmure->copyFrom($armure);
        $characterArmure->setCharacter($character);
        $characterArmure->setArmure($armure);
        $entityManager->persist($characterArmure);
        $entityManager->flush();
       }
       elseif(isset($_POST['validateWeapon']))
       {
        $value = $_POST['value'];
        $characterArmeRepo = $entityManager->getRepository(CharacterArme::class);
        $characterArme = $characterArmeRepo->findAll();
    
        $armeRepo = $entityManager->getRepository(Arme::class);
        $arme = $armeRepo->find($value);
    
        $characterArme = new CharacterArme;
    
        $characterArme->copyFrom($arme);
        $characterArme->setCharacter($character);
        $characterArme->setArme($arme);
        $entityManager->persist($characterArme);
        $entityManager->flush();
       }
       elseif(isset($_POST['validateGift']))
       {
        $value = $_POST['value'];
        $characterDonRepo = $entityManager->getRepository(CharacterDon::class);
        $characterDon = $characterDonRepo->findAll();
    
        $donRepo = $entityManager->getRepository(Don::class);
        $don = $donRepo->find($value);
    
        $characterDon = new CharacterDon;
    
        $characterDon->copyFrom($don);
        $characterDon->setCharacter($character);
        $characterDon->setDon($don);
        $entityManager->persist($characterDon);
        $entityManager->flush();
       }
       elseif(isset($_POST['validateInventory']))
       {
        $value = $_POST['value'];
        $characterInventaireRepo = $entityManager->getRepository(CharacterInventaire::class);
        $characterInventaire = $characterInventaireRepo->findAll();
    
        $inventaireRepo = $entityManager->getRepository(Inventaire::class);
        $inventaire = $inventaireRepo->find($value);
    
        $characterInventaire = new CharacterInventaire;
    
        $characterInventaire->copyFrom($inventaire);
        $characterInventaire->setCharacter($character);
        $characterInventaire->setInventaire($inventaire);
        $entityManager->persist($characterInventaire);
        $entityManager->flush();
       }

       else
       {
        $entityClassName = $_POST["fieldEntity"];
        $fieldName = $_POST["fieldName"];
        $fieldValue = $_POST[$fieldName];
        $entityId = $_POST["entityId"];
    
        $repoDynamic = $entityManager->getRepository($entityClassName);
        $entityDynamic = $repoDynamic->find($entityId);

        $entity;

    if ($entityDynamic != null) {
        $setterName = "set" . ucfirst($fieldName);
        $entityDynamic->$setterName($fieldValue);
        $entityManager->persist($entityDynamic);
        $entityManager->flush();
       }
     } Header('Location: '.$_SERVER['PHP_SELF']);  
  }
?>

