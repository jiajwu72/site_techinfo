<!DOCTYPE>
<html>
    <head>
        <title>accueil</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php

            require"corp.php";require "dbConnexion.php";
        $pageTaille=10;   //le nombre de l'article par page
        $rowCount=0;          //le nombre de donnés existe dans le database
        $pageActuel=1;        //indique sur quelle page l'on est actuellement


        if (isset($_GET['pageActuel'])){
            $pageActuel=$_GET['pageActuel'];
        }

        $req1="SELECT COUNT(id) FROM article"; //compter le nombre d'articles dans le base de donnée
        $res1=mysqli_query($conn,$req1);

        //retirer ligne
        if ($row=mysqli_fetch_row($res1)){
            $rowCount=$row[0];
        }

        //calculer combien de pages 
        $pageTotal=ceil($rowCount/$pageTaille);

        $pageActuel=($pageActuel-1)*$pageTaille;
        $req2="SELECT * FROM article ORDER BY id DESC limit $pageActuel,$pageTaille";
        $res2=mysqli_query($conn,$req2);


        echo "<div class='milieu'>";
        echo "<table >";
        while($row=mysqli_fetch_assoc($res2)){
            $titre=$row['titre'];
            $addTime=$row['addTime'];
            $id=$row['id'];
            $idAuteur=$row['idAuteur'];

            //la recherche: le prenom et le statut d'auteur
            $req1="SELECT * FROM compte WHERE id='$idAuteur' ";
            $res1=mysqli_query($conn,$req1);
            if (!$res1){
                $conn->error;
            }
            $row1=mysqli_fetch_assoc($res1);
            if (!$row1){
                $conn->error;
            }
            $prenom=$row1['prenom'];
            $statut=$row1['statut'];

            echo "
                    
                    <tr>
                        <td class='time'>$addTime</td>
                        <td class='titre'><a href='article.php?id=$id&'> $titre</a></td>
                        <td class='prenom'>écrit par $prenom</td>
                        <td class='statut'> ($statut)</td>
                    </tr>";
                    

        }

        echo "</table>";
        for($i=1;$i<=$pageTotal;$i++){

            echo "<a href='accueil.php?pageActuel=$i'>$i </a>";
        }
        echo "</div>";




        require "pied.html";
        ?>
        


    </body>



</html>