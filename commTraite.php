<?php
    require "corp.php";    require "dbConnexion.php";

    $idArticle=$_POST['id'];
    //stocker les information sur une commentaire
    $idAtueur=$_SESSION['id'];
    $auteur=$_SESSION['prenom'];
    $contenu=$_POST['contenu'];
    $req="INSERT INTO commentaire VALUES( NULL, '$idAuteur','$auteur','$idArticle','$contenu') ";
    $res=mysqli_query($conn,$req);
    if (!$res){
        $conn->error;
    }
    mysqli_free_result($res);
    $conn->close();
    header("location: article.php?id=$idArticle");

?>
