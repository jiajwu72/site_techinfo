<?php



    $conn=new Mysqli("localhost","root","","techInfo");
    if ($conn->connect_error){
        die($conn->connect_error);
    }
    
    $id=$_POST['id'];
    $mdp=$_POST['mdp'];
    echo "identifiant ou mot de passe est incorrecte<br> <a href='connexion.php'>retourner</a> ";
    $req="SELECT * FROM compte WHERE id='$id' ";
    $res=mysqli_query($conn,$req);
    if (!$res){
        die($conn->error);
    }

    if ($row=mysqli_fetch_assoc($res)){
        if($row['mdp']==md5($mdp)){
            
            session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['nom']=$row['nom'];
            $_SESSION['prenom']=$row['prenom'];
            $_SESSION['email']=$row['email'];
            $_SESSION['mdp']=$row['mdp'];
            $_SESSION['statut']=$row['statut'];

            header("location: connexionreussi.php");
            exit();
        }

    }else{
        header("locaton: connexion.php");
        exit();
    }
    mysqli_free_result($res);
    mysqli_close($conn);
    



?>
