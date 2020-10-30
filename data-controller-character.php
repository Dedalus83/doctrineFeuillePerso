<?php


use orm\Entity\Argent;
use orm\Entity\Contact;
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
use orm\Service\CharacterSheetService;

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

$contacts = $character->getContact();

$magieRepo = $entityManager->getRepository(Magie::class);
$magics = $magieRepo->findBy(array(), array('type'=>'asc'));

$competenceRepo = $entityManager->getRepository(Competence::class);
$skills = $competenceRepo->findBy(array(), array('nom'=>'asc'));

$donRepo = $entityManager->getRepository(Don::class);
$gifts = $donRepo->findBy(array(), array('nom'=>'asc'));

$armeRepo = $entityManager->getRepository(Arme::class);
$weapons = $armeRepo->findBy(array(), array('nom'=>'asc'));

$armureRepo = $entityManager->getRepository(Armure::class);
$armors = $armureRepo->findBy(array(), array('nom'=>'asc'));

$inventaireRepo = $entityManager->getRepository(Inventaire::class);
$inventories = $inventaireRepo->findBy(array(), array('nom'=>'asc'));


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
          header("Location: characterPage.php?tab=".CharacterMagie::getTabTitle());
          die();
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
          header("Location: characterPage.php?tab=".CharacterCompetence::getTabTitle());
          die();
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
        header("Location: characterPage.php?tab=".CharacterArmure::getTabTitle());
          die();
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
        header("Location: characterPage.php?tab=".CharacterArme::getTabTitle());
          die();
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
        header("Location: characterPage.php?tab=".CharacterDon::getTabTitle());
          die();
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
        header("Location: characterPage.php?tab=".CharacterInventaire::getTabTitle());
          die();
        } 
        elseif (isset($_POST['remove'])) 
        {
          $entityClassName = $_POST["fieldEntity"];
          $entityId = $_POST['entityId'];
        
          $repoDynamic = $entityManager->getRepository($entityClassName);
          $entityDynamic = $repoDynamic->find($entityId);
          $entityManager->remove($entityDynamic);
          $entityManager->flush();
              }
        elseif(isset($_POST['contact']))
        {
          
          $contactRepo = $entityManager->getRepository(Contact::class);
          $contact = $contactRepo->findAll();
           
          $create = new Contact();

          $characterId = $character->getId();
          $create->setNumberTel($_POST['numberTel']);
          $create->setNameContact($_POST['nameContact']);
          $create->setChance($_POST['chance']);
          
      
          $entityManager->persist($create);
          $entityManager->flush();

          $contactId = $create->getId();
          $bdd = new PDO('mysql:host=localhost;dbname=infoperso;charset=utf8', 'root', '');
          $requete = $bdd->query("UPDATE contacts SET character_id=$characterId WHERE id = $contactId");
          header("Location: characterPage.php?tab=".Contact::getTabTitle());
            die();
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
     } 
        header("Location: characterPage.php?tab=".$entityClassName::getTabTitle());
        die(); 
          
  }

//   if ($_SERVER["REQUEST_METHOD"] === "POST") {
//       if (isset($_POST['remove'])) {

//         $className = $_POST['fieldEntity'];
//         $id = $_POST['entityId'];

//         $repoDynamic = $entityManager->getRepository($entityClassName);
//         $entityDynamic = $repoDynamic->find($entityId);
//         $repo->remove();
//         $repo->flush();
//       };
//   };
    
// ?>

