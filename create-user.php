<?php
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use orm\Entity\User;

if(isset($_POST['valider'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom =htmlspecialchars($_POST['prenom']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $email = htmlspecialchars($_POST['email']);
   $mailVerif = htmlspecialchars($_POST['mailVerif']);
   $pass = sha1($_POST['pass']);
   $passVerif = sha1($_POST['passVerif']);
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['email'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($email == $mailVerif) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $entityManager->createQuery("SELECT user FROM orm\Entity\User user WHERE user.email = :email");
               $reqmail->setParameter('email', $email);
               $mails = $reqmail->getResult();
               $mailCount = count($mails);

               if($mailCount == 0) {
                  if($pass == $passVerif) {
                  
                    $create = new User();
                    $create->setNom($nom);
                    $create->setPrenom($prenom);
                    $create->setPseudo($pseudo);
                    $create->setPassword($pass);
                    $create->setEmail($email);
                
                    $entityManager->persist($create);
                    $entityManager->flush();

                    session_start(); 
                    $_SESSION['id'] = $create->getId();
                    header("Location:create-character.php");

                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion-user.php\">Me connecter</a>";
                  } else {
                    $erreur = "Vos mots de passes ne correspondent pas !";
                 }
              } else {
                 $erreur = "Adresse mail déjà utilisée !";
              }
           } else {
              $erreur = "Votre adresse mail n'est pas valide !";
           }
        } else {
           $erreur = "Vos adresses mail ne correspondent pas !";
        }
     } else {
        $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
     }
  } else {
     $erreur = "Tous les champs doivent être complétés !";
  }
  }
         
?>

<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Inscription</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.scss">
    </head>
    <body>
    <div class="container">
        <br><br>
        <h1>INSCRIPTION</h1>
        <br><br>
        <form action="" method="post">
           <div class="col">
           <div class="row">
               <label for="nom">NOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="NOM" id="nom" name="nom" required <?php if(isset($nom)) { echo $nom; } ?>>
           </div>
           <div class="row">
               <label for="prenom">PRENOM: </label>
               <input class="form-control form-control-lg" type="text" placeholder="PRENOM" id="prenom" name="prenom" required <?php if(isset($prenom)) { echo $prenom; } ?>>
           </div>
           <div class="row">
               <label for="pseudo">PSEUDO: </label>
               <input class="form-control form-control-lg" type="text" placeholder="PSEUDO" id="pseudo" name="pseudo" required <?php if(isset($pseudo)) { echo $pseudo; } ?>>
           </div>
           <div class="row">
               <label for="email">EMAIL: </label>
               <input class="form-control form-control-lg" type="email" placeholder="EMAIL" id="email" name="email" required <?php if(isset($email)) { echo $email; } ?>>
           </div>
           <div class="row">
               <label for="mailVerif">EMAIL VERIFICATION: </label>
               <input class="form-control form-control-lg" type="email" placeholder="RENTREZ A NOUVEAU VOTRE EMAIL" id="mailVerif" name="mailVerif" required value='<?php if(isset($mailVerif)) { echo $mailVerif; } ?>'>
           </div>
           <div class="row">
               <label for="pass">MOT DE PASSE: </label>
               <input class="form-control form-control-lg" type="password" placeholder="MOT DE PASSE" id="pass" name="pass" required <?php if(isset($pass)) { echo $pass; } ?>>
           </div>  
           <div class="row">
               <label for="passVerif">MOT DE PASSE VERIFICATION: </label>
               <input class="form-control form-control-lg" type="password" placeholder="RENTREZ A NOUVEAU VOTRE MOT DE PASSE" id="passVerif" name="passVerif" required <?php if(isset($passVerif)) { echo $passVerif; } ?>>
           </div> 
           <br>
           <div class="row">
           <input class='btn btn-primary' type='submit' name='valider' value='valider'>
</div>
</div>
        </form>
    </div>

    <?php
         if(isset($erreur)) {
            echo '<div class="error">'.$erreur."</div>";
         }
         ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    </body>
</html>