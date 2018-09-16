<?php
    require "compte.php"; require "dbConnexion.php";

//stocker les informations modifiés par la méthode post
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $id=$_SESSION['id'];

    $req="UPDATE compte SET nom='$nom',prenom='$prenom',email='$email' WHERE id='$id' ";
    $res=mysqli_query($conn,$req);
    if (!$res){
        $conn->error;
    }

    if($nom!='' && $prenom!='' && $email!='' ) {
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        mysqli_free_result($res);
        $conn->close();
        header('Location: profil.php');
    }else{
        echo "<div class='milieu'> les champs ne doivent pas être vide!<br>

                <a href='javascript:window.history.back()'> retourner</a>
              </div>";
    }
?>