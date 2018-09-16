<?php
    require "compte.php"; require "dbConnexion.php";

    /*$req="SELECT * FROM  compte  ";
    $res=mysqli_query($conn,$req);

    if(!$res){
        $conn->error;
    }

    $ligne=mysqli_fetch_assoc($res);
    $id=$ligne['id'];*/
    $id=$_SESSION['id'];
    $nom=$_SESSION['nom'];
    $prenom=$_SESSION['prenom'];
    $email=$_SESSION['email'];
    $statut=$_SESSION['statut'];
    /*echo $id.$nom.$prenom.$email;*/

    echo "<div class='milieu'>
        <table>
        <tr>
            <td>identifiant:</td> <td>$id </td>
        </tr>
        
        <tr>
            <td>statut:</td> <td> $statut</td>
        </tr>
        
        <tr>
            <td>nom: </td> <td>$nom </td>
        </tr>
        
        <tr>
            <td>prenom:</td> <td> $prenom</td>
        </tr>
        
        <tr>
            <td>email:</td> <td> $email</td>
        </tr>

        <a href='modifieProfil.php'>Modifier les informations</a>
        </table>
    </div>
    ";





    require "pied.html";
?>