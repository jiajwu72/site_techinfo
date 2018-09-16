<?php

//fait le traitement des articles(ajout,suppression,modification)

    require "corp.php";  require "dbConnexion.php";
    if ($_POST['titre']!="" && $_POST['contenu']){
        switch ($_GET["action"]) {

            case "add":/*traitement d'une ajout*/

                //stocker les valeurs dans le db "article"
                $idAuteur = $_SESSION['id'];
                $addTime = date("Y/m/d");
                $titre = mysqli_real_escape_string($conn, $_POST['titre']);
                $contenu = mysqli_real_escape_string($conn, $_POST['contenu']);;
                $req = "INSERT INTO article VALUES( NULL,'$idAuteur','$addTime', '$titre', '$contenu' ) ";
                if (!$conn->query($req)) {
                    die($conn->error);
                }
                /*stocker l'image dans le db "photo"

                if (isset($_POST['img']) && $_POST['img'] != '') {

                    $name = $_POST['img'];
                    $addTime1 = date("Y/m/d");
                    $req1 = "INSERT INTO photo VALUES( NULL,'$idAuteur','$name', '$addTime1') ";
                    if (!$conn->query($req1)) {
                        die($conn->error);
                    }
                } ici je n'arrive pas à stocker le chemin complet d'une image, donc je le laisse à part*/
                $id = mysqli_insert_id($conn);
                if ($id > 0) {
                    echo "<h3>vous avez ajouter une article.</h3>";
                } else {
                    echo "<h3>Impossible d'ajouter cette article!</h3>";
                }


                echo "<a href='javascript:window.history.back()'>retourner</a>&nbsp;&nbsp;";/*retourner à la page précédente*/
                echo "<a href='accueil.php'>retourner à la page d'accueil";
                break;
                $conn->close();
        }

    }else{
        echo "le titre et le contenu ne doivent pas être null!";
    }







?>
