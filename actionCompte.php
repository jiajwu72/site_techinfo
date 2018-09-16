<?php

//fait le traitement des comptes(ajout,suppression,modification)
    require "corp.php";  require "dbConnexion.php";

switch ($_GET["action"]){

    case "add":/*traitement d'une ajout*/

        //stocker les valeurs dans le db "article"
        $id=$_SESSION['id'];
        $req="INSERT INTO comte VALUES( NULL,'$idAuteur','$addTime', '$titre', '$contenu' ) ";
        if (!$conn->query($req)){
            die($conn->error);
        }

        $id=mysqli_insert_id($conn);
        if ($id>0){
            echo "<h3>vous avez ajouter une article.</h3>";
        }else{
            echo "<h3>Impossible d'ajouter cette article!</h3>";
        }
        echo "<a href='javascript:window.history.back()'>retourner</a>&nbsp;&nbsp;";/*retourner à la page précédente*/
        echo "<a href='accueil.php'>retourner à la page d'accueil";
        break;

    case "del":  /*traitement d'une suppression*/
        
        $id=$_GET['id'];
        $req="DELETE FROM compte where id=62 ";
        if (!$conn->query($req)){
            die($conn->error);

        }
        header("location:admin.php");
        break;

        /*case "update":
            $idAuteur=$_SESSION['id'];
            $addTime=time();
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];

            $req="UPDATE article SET titre='$titre',contenu='$contenu' ";*/

        $conn->close();
}






?>