<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=infoperso;charset=utf8', 'root', '');
if (isset($_POST['valider'])) {
    $pseudoConnect = htmlspecialchars($_POST['pseudoconnect']);
    $passConnect = sha1($_POST['passconnect']);
    if (!empty($pseudoConnect) and !empty($passConnect)) {
        $resUser = $bdd->prepare("SELECT * FROM users WHERE pseudo = ? AND pass = ?");
        $resUser->execute(array($pseudoConnect, $passConnect));
        $userExist = $resUser->rowCount();
        if ($userExist == 1) {
            $userInfo = $resUser->fetch();
            $_SESSION['id'] = $userInfo['id'];
            $_SESSION['pseudo'] = $userInfo['pseudo'];
            $_SESSION['mail'] = $userInfo['email'];
            header("Location:characterPage.php?id=" . $_SESSION['id']);
        } else {
            $erreur = "Mauvais pseudo ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Connexion</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.scss">
    </head>
    <body>
        <div class="container">
            <br /><br /><br />
            <h1>CONNEXION</h1>
            <br /><br /><br /><br /><br /><br /><br />
            <form method="POST" action="">
                <div class="col">
                    <div class="row">
                        <label for="pseudoconnect">PSEUDO</label>
                <input class='form-control form-control-lg' type="text" name="pseudoconnect" placeholder="PSEUDO" />
                    </div>
                <div class="row">
                         <label for="passconnect">MOT DE PASSE</label>
                <input class='form-control form-control-lg' type="password" name="passconnect" placeholder="MOT DE PASSE" />
                    </div>
                <br /><br /><br />
                <input class="btn btn-primary" type="submit" name="valider" value="Se connecter" />
</div>
            </form>
            <?php
if (isset($erreur)) {
    echo '<div class="error">' . $erreur . "</div>";
}
?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>