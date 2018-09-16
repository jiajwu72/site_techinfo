<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>inscription</title>
        <link rel="stylesheet" href="inscrip.css">
    </head>

    <body>
        <?php include("entete.php") ?>
        <form action="inscripreussi.php" method="post">
            <div class="bord">
                <span id="inscrip"><strong>Inscription</strong></span> <br>
                <div>
                    <span>
                        <label>Nom:</label>
                        <input name="nom" type="text" name="nom">
                    </span>

                    <span>
                        <label>Prénom:</label>
                        <input name="prenom" type="text" name="prenom">
                    </span>

                    <span>
                        <label>Email:</label>
                        <input name="email" type="text" name="email">
                    </span>

                    <span>
                        <label>Mot de passe:</label>
                        <input name="mdp" type="password" name="mdp">
                    </span>

                    <span class="actions">
                        <input type="reset" value=""/>
                        <input type="submit" value=""/>
                    </span>

                    <span class="Retour"><a href="accueil.php">Retourner à la page d'accueil</a></span>

                </div>
            </div>
        </form>
    </body>
</html>