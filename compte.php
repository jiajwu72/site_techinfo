

<body>
<?php
    require "corp.php"; require "dbConnexion.php";

    if (isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $req="SELECT * FROM  compte WHERE  id='$id' ";
        $res=mysqli_query($conn,$req);
        if(!$res){
            $conn->error;

        }
        else{
            $row=mysqli_fetch_assoc($res);

            $statut=$row['statut'];
            
        }

        echo "<div class='barreGauche'>";

        if ($statut=="administrateur"){
                echo "
                         <span class='barreEle'><a href='admin.php'> Administration </a></span> <br>";
        }

            echo " 
                        <a href='profil.php'> Mon Profil </a> <br>
                        <a href='mesArticles.php'> Mes Articles</a> <br> 
                        
                        <a href='deconnexion.php'>Déconnexion</a>  <br>
                   </div>";
    }

    else{
        echo "<div class='milieu'>vous n'êtes pas connecté </div>";
    }



    

?>
</body>

