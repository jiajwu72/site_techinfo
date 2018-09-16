<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="connexionMess.css">
        <meta charset="utf-8">

    </head>

    <body>
        <?php 
        
        require"entete.php"; require"dbConnexion.php";
            if ($_POST['nom']=='' ||$_POST['prenom']=='' ||$_POST['email']=='' ||
                    $_POST['mdp']=='' ){
                    echo "les champs ne peuvent pas etre null";
                }else {
                $statut = 'membre';
                $nom = $_POST["nom"];
                $nom = mysqli_real_escape_string($conn, $nom);//éviter les injections

                $prenom = $_POST["prenom"];
                $prenom = mysqli_real_escape_string($conn, $prenom);

                $email = $_POST["email"];
                $email = mysqli_real_escape_string($conn, $email);

                $mdp = $_POST["mdp"];
                $mdp = mysqli_real_escape_string($conn, $mdp);
                $mdp = md5($mdp);


                //echo "réussi";
                $req = "INSERT INTO compte (statut,nom,prenom,email,mdp) VALUES(
                               '$statut','$nom','$prenom','$email','$mdp')";

                if (!$conn->query($req)) {
                    die($conn->error);
                }


                echo "<div class='cls1' >

                    <span > Félicitations, votre compte a <br> bien été créé!";

                $req = "SELECT * FROM compte WHERE nom='$nom' AND prenom='$prenom' AND email='$email' AND mdp='$mdp'";
                $res = mysqli_query($conn, $req);
                if (!$res) {
                    $conn->error;
                }

                $ligne = mysqli_fetch_assoc($res);
                if (!$ligne) {
                    $conn->error;
                }


                echo "votre identifiant <br> est: <strong >" .
                    $ligne['id'] . "</strong>";
                mysqli_free_result($res);
                $conn->close();
                


                echo " </span>
            </div>

            <div class='valide'>
                <a href='accueil.php'>Retourner à la page d'accueil</a>
            </div>";
            }
    ?>
    </body>

</html>
