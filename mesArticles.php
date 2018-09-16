<?php
    require "compte.php";require "dbConnexion.php";
    $id=$_SESSION['id'];
    $req="SELECT * FROM article where idAuteur='$id' ";
    $res=mysqli_query($conn,$req);
    if (!$res){
        $conn->error;
    }

    /*$ligne=mysqli_fetch_assoc($res);
    $titre=$ligne['titre'];*/
    echo "<div class='milieu'>";
    while($ligne=mysqli_fetch_assoc($res)){
        $titre=$ligne['titre'];
        $c=$ligne['id'];
        echo "

            <a href='article.php?id=$c'> $titre</a><br>
            
            
        ";
    }
    echo "</div>";









    require "pied.html";
?>