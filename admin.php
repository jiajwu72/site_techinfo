<!DOCTYPE>
<html>
    <head>
        <title>administration</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin.css">
    </head>



    <?php
        require "compte.php";
        

        $req="SELECT * FROM compte WHERE statut='membre' OR statut='moderateur' ";
        $res=mysqli_query($conn,$req);
    
        echo "<div class='milieu'>";
        echo "<table border='1px' width='700px'> ";
        echo "<tr>
                <th>STATUT</th> <th>ID</th> <th>NOM</th> <th>PRENOM</th> <th>EMAIL</th> 
                <th>ACTION</th>
              </tr>";
        while ($row=mysqli_fetch_assoc($res)){
            $statut=$row['statut'];
            $id=$row['id'];
            $nom=$row['nom'];
            $prenom=$row['prenom'];
            $email=$row['email'];
            echo "<tr>
                            <td>$statut</td>
                            <td>$id</td>
                            <td>$nom</td>
                            <td>$prenom</td>
                            <td>$email</td>
                            <td><a href='supprimerCompte.php?id=$id'>supprimer</a> </td>
                             
                  </tr> ";
        }
        echo '</table>'.'</div>';




        



            mysqli_free_result($res);

            $conn->close();

    require "pied.html";
    ?>

</html>
