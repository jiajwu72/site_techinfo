<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>message de connexion</title>
        <link rel="stylesheet" href="connexionMess.css">        
    </head>

    <body>
        <?php
            require "entete.php";
        
        ?>
        <div class="cls1">
            
            <span >bienvenu <?php echo $_SESSION['prenom'].$_SESSION['id']; ?> ! Vous êtes <br> maintenant  connecté.</span>
        </div>

        <div class="valide">
            <a href="accueil.php">Retourner à la page d'accueil</a>
        </div>

    </body>

</html>