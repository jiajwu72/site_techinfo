<?php
    require "corp.php"; require "dbConnexion.php";
    $contenu=$_POST['contenu'];
    $id=$_POST['id'];

    $req="UPDATE article SET contenu='$contenu' WHERE id=  $id " ;
    $res=mysqli_query($conn,$req);
    if (!$res){
        $conn->error;
    }
    header("location: article.php?id=$id ");


?>