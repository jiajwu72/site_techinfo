<?php
    require "corp.php";require "dbConnexion.php";
        $req="SELECT * FROM photo ORDER BY addtime desc";
    $res=mysqli_query($conn,$req);
    echo "<div class='milieu'>";
    echo "<table >";
    while ($row=mysqli_fetch_assoc($res)) {
        $name=$row['name'];
        echo "<img src='$name'>";
        echo $name;
    }

    echo "</table>";
    echo "</div>";




    $conn->close();
    require "pied.html";
?>