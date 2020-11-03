<?php
session_start();
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\Character;
use orm\Entity\User;
use orm\Entity\Argent;

$bdd = new PDO('mysql:host=localhost;dbname=infoperso;charset=utf8', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $create = new Character();
    $create->setnom($_POST['nom']);
    $create->setprenom($_POST['prenom']);
    $create->setage($_POST['age']);
    $create->setrace($_POST['race']);
    $create->setsexe($_POST['sexe']);
    $create->settaille($_POST['taille']);
    $create->setpoids($_POST['poids']);
    $create->setyeux($_POST['yeux']);
    $create->setcheveux($_POST['cheveux']);
    $create->setrang($_POST['rang']);
    $create->setvie($_POST['vie']);
    $create->setforce($_POST['force']);
    $create->setmana($_POST['mana']);
    $create->setpuissance($_POST['puissance']);
    $create->setprecis($_POST['precis']);
    $create->setinitiative($_POST['initiative']);
    $create->setagilite($_POST['agilite']);
    $create->setmental($_POST['mental']);
    $create->setintelligence($_POST['intelligence']);
    $create->setvolonte($_POST['volonte']);
    $create->setperception($_POST['perception']);
    $create->setmaitrise($_POST['maitrise']);
    $create->setparade($_POST['parade']);
    $create->setesquive($_POST['esquive']);
    $create->setbloque($_POST['bloque']);
    $create->setencaissement($_POST['encaissement']);
    $create->setresilience($_POST['resilience']);
    $create->setcritique($_POST['critique']);
    $create->setmagRedRes($_POST['magRedRes']);
    $create->setmagWhiteRes($_POST['magWhiteRes']);
    $create->setmagBlueRes($_POST['magBlueRes']);
    $create->setmagGreenRes($_POST['magGreenRes']);
    $create->setmagBlackRes($_POST['magBlackRes']);
    $create->setmagPrismRes($_POST['magPrismRes']);
    $create->setmagRedCrit($_POST['magRedCrit']);
    $create->setmagWhiteCrit($_POST['magWhiteCrit']);
    $create->setmagBlueCrit($_POST['magBlueCrit']);
    $create->setmagGreenCrit($_POST['magGreenCrit']);
    $create->setmagBlackCrit($_POST['magBlackCrit']);
    $create->setmagPrismCrit($_POST['magPrismCrit']);

    $entityManager->persist($create);
    $entityManager->flush();

    $createArgent = new Argent();
    $createArgent->setGold();
    $createArgent->setPlatine();
    $createArgent->setMithril();
    $createArgent->setDragon();
    $createArgent->setThrone();
    $createArgent->setPlacement();

    $entityManager->persist($createArgent);
    $entityManager->flush();

    $identity = $_SESSION['id'];
    $character = $create->getId();
    $requete = $bdd->query("INSERT INTO character_user SET character_id=$identity, user_id=$character");

    $argentId = $createArgent->getId();
    $requete = $bdd->query("UPDATE characters SET argent_id=$argentId WHERE id = $character");
    $requete = $bdd->query("UPDATE argents SET character_id=$character WHERE id = $argentId");
   
    $requete = $bdd->query("INSERT INTO argents SET character_id=$character");


    
    header("Location:connexion-user.php?id=" . $_SESSION['id']);
  }

?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Create Character</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.scss">
    </head>
    <body>
    <div class="container">
     
        <br><br>
        <h1>INFORMATIONS PRINCIPALES</h1>
        <br><br>
        <form action="" method="post">
        <div class="col">
           <div class="row">
               <label for="nom">NOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="NOM" name="nom">
           </div>
           <div class="row">
               <label for="prenom">PRENOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="PRENOM" name="prenom" required>
           </div>
           <div class="row">
               <label for="age">AGE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="AGE" name="age">
           </div>
           <div class="row">
               <label for="race">RACE: </label>
               <input class="form-control form-control-lg" type="text" placeholder="RACE" name="race" required>
           </div>
           <div class="row">
               <label for="sexe">SEXE: </label>
               <input class="form-control form-control-lg" type="text" placeholder="SEXE" name="sexe">
           </div>  
           <div class="row">
               <label for="taille">TAILLE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="Entrez la taille en CM" name="taille">
           </div>
           <div class="row">
               <label for="poids">POIDS: </label>
               <input class="form-control form-control-lg" type="number" placeholder="POIDS EN KILOS" name="poids">
           </div>
           <div class="row">
               <label for="yeux">YEUX: </label>
               <input class="form-control form-control-lg" type="text" placeholder="YEUX" name="yeux">
           </div>
           <div class="row">
               <label for="cheveux">CHEVEUX: </label>
               <input class="form-control form-control-lg" type="text" placeholder="CHEVEUX" name="cheveux">
           </div>
           <div class="row">
               <label for="rang">RANG: </label>
               <input class="form-control form-control-lg" type="text" placeholder="RANG" name="rang">
           </div>
       <br><br>
   <h1>CARACTERISTIQUES PHYSIQUES</h1>
   <br><br>
           <div class="row">
               <label for="vie">VIE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="VIE" name="vie" required>
           </div>
           <div class="row">
               <label for="force">FORCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="FORCE" name="force" required>
           </div>
           <div class="row">
               <label for="mana">MANA: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MANA" name="mana">
           </div>
           <div class="row">
               <label for="puissance">PUISSANCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PUISSANCE" name="puissance">
           </div>
           <div class="row">
               <label for="precis">PRECISION: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PRECISION" name="precis" required>
           </div>
     
           <div class="row">
               <label for="initiative">INITIATIVE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="INITIATIVE" name="initiative" required>
           </div>
           <div class="row">
               <label for="agilite">AGILITE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="AGILITE" name="agilite" required>
           </div>
           <div class="row">
               <label for="mental">MENTAL: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MENTAL" name="mental" required>
           </div>
           <div class="row">
               <label for="intelligence">INTELLIGENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="INTELLIGENCE" name="intelligence" required>
           </div>
           <div class="row">
               <label for="volonte">VOLONTE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="VOLONTE" name="volonte" required>
           </div>
   
           <div class="row">
               <label for="perception">PERCEPTION: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PERCEPTION" name="perception" required>
           </div>
           <div class="row">
               <label for="maitrise">MAITRISE GENERALE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAITRISE GENERALE" name="maitrise" required>
           </div>
           <div class="row">
               <label for="parade">PARADE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="PARADE" name="parade">
           </div>
           <div class="row">
               <label for="esquive">ESQUIVE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="ESQUIVE" name="esquive" required>
           </div>
           <div class="row">
               <label for="bloque">BLOQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="BLOQUE" name="bloque">
           </div> 
   <div class="row">
               <label for="encaissement">ENCAISSEMENT: </label>
               <input class="form-control form-control-lg" type="number" placeholder="ENCAISSEMENT" name="encaissement">
           </div>
           <div class="row">
               <label for="resilience">RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="RESILIENCE" name="resilience">
           </div>
           <div class="row">
               <label for="critique">CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="CRITIQUE" name="critique">
           </div>
   <br><br>
   <h1>CARACTERISTIQUES MAGIQUES</h1>
   <br><br>
           <div class="row">
               <label for="mrr">MAGIE ROUGE RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE ROUGE RESILIENCE" name="magRedRes">
           </div>
           <div class="row">
               <label for="mbr">MAGIE BLEUE RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE BLEUE RESILIENCE" name="magBlueRes">
           </div>
           <div class="row">
               <label for="mbr1">MAGIE BLANCHE RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE BLANCHE RESILIENCE" name="magWhiteRes">
           </div>
           <div class="row">
               <label for="mvr">MAGIE VERTE RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE VERTE RESILIENCE" name="magGreenRes">
           </div>
           <div class="row">
               <label for="mnr">MAGIE NOIRE RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE NOIRE RESILIENCE" name="magBlackRes">
           </div>
           <div class="row">
               <label for="mpr">MAGIE PRISMA RESILIENCE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE PRISMA RESILIENCE" name="magPrismRes">
           </div>
           <div class="row">
               <label for="mrc">MAGIE ROUGE CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE ROUGE CRITIQUE" name="magRedCrit">
           </div>
           <div class="row">
               <label for="mbc">MAGIE BLEUE CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE BLEUE CRITIQUE" name="magBlueCrit">
           </div>
           <div class="row">
               <label for="mbc1">MAGIE BLANCHE CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE BLANCHE CRITIQUE" name="magWhiteCrit">
           </div>
           <div class="row">
               <label for="mvc">MAGIE VERTE CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE VERTE CRITIQUE" name="magGreenCrit">
           </div>
           <div class="row">
               <label for="mnc">MAGIE NOIRE CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE NOIRE CRITIQUE" name="magBlackCrit">
           </div>
           <div class="row">
               <label for="mpc">MAGIE PRISMA CRITIQUE: </label>
               <input class="form-control form-control-lg" type="number" placeholder="MAGIE PRISMA CRITIQUE" name="magPrismCrit">
           </div>
           <br>
           <input class='btn btn-primary' type='submit' name='valider' value='valider'>
           </div>
   </form>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    </body>
</html>