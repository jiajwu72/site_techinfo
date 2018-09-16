<?php
    require "corp.php"; require "dbConnexion.php";
    $id=$_GET['id'];

    $req="DELETE FROM compte WHERE id=$id ";

    $res=mysqli_query($conn,$req);
    if (!$res){
        $conn->error;
    }
    $conn->close();
    header("location:admin.php");






?>