<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="connexionMess.css">
        <meta charset="utf-8">
        <title>connexion</title>
    </head>

    <body>
        <?php include("entete.php") ?>

            <br><br>
            <form action="connexionprocessus.php" method="post">
                <table >
                    <tr>
                        <td>identifiant</td>
                        <td><input type="text" name="id"</td>
                    </tr>

                    <tr>
                        <td>Mot de Passe</td>
                        <td><input type="password" name="mdp"</td>
                    </tr>

                    <tr><td> -------------------------</td></tr>

                    <tr>
                        <div class="login_in">
                            <td><input type="reset" value="effacer"></td>
                            <td><input type="submit" value="connecter"></td>
                        </div>
                    </tr>
                </table>
            </form>
        <?php require "pied.html"; ?>

    </body>
</html>
