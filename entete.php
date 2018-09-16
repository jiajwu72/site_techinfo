<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="entete.css">
    <meta charset="utf-8">

</head>

<body>
<div class="top">
    <spam class="topMot">Journal des nouvelles technologies</spam>
</div>

<div class="liste">
    <ul class="index">
        <li ><a href="accueil.php">menu accueil</a></li>
        
        <li><a href="presentation.php">presentation du site</a></li>
        <li><a href="compte.php">Mon compte</a></li>
    </ul>
</div>
    <?php
        session_start();

        if (isset($_SESSION['id'])){

            echo "<span >
                        
                        <a class='mot' href='addNew.php'>écrire une article </a>       
                  </span> ";
        }else{
            echo "<span ><a class='mot' href=inscription.php>inscrivez vous </a></span> <br>";
            echo "<span ><a class='mot' href=connexion.php>connectez vous </a></span>  ";
        }
    

    ?>
</body>
</html>

