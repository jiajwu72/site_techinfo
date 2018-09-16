<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="article.css">

    </head>
    
    <body>
    <?php
        require "corp.php";    require "dbConnexion.php";

            $id = $_GET['id']; //id de l'article



            $req = "SELECT * FROM article WHERE id='$id' ORDER BY id DESC ";
            $res = mysqli_query($conn, $req);
            if ($row = mysqli_fetch_assoc($res)) {
                $titre = $row['titre'];
                $contenu = $row['contenu'];
            }
                /*$img=$row['img'];*/
                echo "
            <div class='milieu'>
                 <span class='titre'>$titre </span> <br>";



                 echo "
                
                <span>$contenu </span>";
                if (isset($_SESSION['id'])) {
                    $statut = $_SESSION['statut'];
                    $idAuteur = $_SESSION['id'];
                    if ($statut == "administrateur" || $statut == "moderateur" || $_SESSION['id'] == $row['idAuteur'] ) {
                        echo "<br>";
                        echo "<a href='supprimerArticle.php?id=$id&idAuteur=$idAuteur'>supprimer </a>";
                        echo "<a href='modifieArticle.php?id=$id&contenu=$contenu'>modifier</a>";
                    }
                }

                echo"<br><br><br>Commentaire en Ligne <br>";
                $req="SELECT * FROM commentaire WHERE idArticle='$id' ORDER BY id DESC ";
                $res=mysqli_query($conn,$req);
                if (!$res){
                    $conn->error;
                }

                while ($row = mysqli_fetch_assoc($res)) {
                    $contenu = $row['contenu'];
                    echo $row['auteur'].":".$row['contenu']."<br>";
                }





                if (isset($_SESSION['id'])) {
                    echo "
                        <form action='commTraite.php' method='post'>
                            <input type='hidden' name='id' value='$id'>
                            ajouter un commentaire:<textarea name='contenu'></textarea><br>
                            <input type='submit' value='valider'>
                        </form>
                    
                    ";




                }
    echo "</div>";




    require "pied.html";
    ?>
    </body>
</html>
