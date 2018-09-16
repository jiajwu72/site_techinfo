<?php
    require "compte.php";
    echo "
        <div class='milieu'>
        <form action='actionProfil.php' method='post'>
            nom:<input type='text' name='nom'><br>
            prenom:<input type='text' name='prenom'><br>
            email:<input type='text' name='email'><br>
            <input type='submit' value='valider'>
        </form>
        </div>
    ";



    require "pied.html";
?>