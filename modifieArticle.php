<?php
    require "corp.php"; /*require "dbConnexion.php";*/
    $id=$_GET['id'];
    $contenu=$_GET['contenu'];
    echo "
        <form class='milieu' action='modifieAction.php' method='post'>
            <input type='hidden' name='id' value='$id'>  
            <textarea cols='60' rows='50' name='contenu' >$contenu</textarea>
            <input type='submit' value='valider'>
            
    
    
        </form>
    ";



?>