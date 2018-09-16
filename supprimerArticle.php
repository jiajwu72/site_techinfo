<?php
    require "corp.php"; require "dbConnexion.php";
    $id=$_GET['id'];
    $idAuteur=$_GET['idAuteur'];
    
        $req = "DELETE FROM article WHERE id=$id ";

        $res = mysqli_query($conn, $req);
        if (!$res) {
            $conn->error;
        }
        $conn->close();
        header("location:accueil.php");

    





?>