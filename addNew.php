<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php require"corp.php" ?>
        <form action="actionArticle.php?action=add" method="post" enctype="multipart/form-data">
            <table >
                <tr>
                    <td align="right">titre</td>
                    <td><input type="text" name="titre"/> </td>
                </tr>

                <tr>
                    <th></th>
                    <th><textarea cols="70" rows="50" name="contenu"></textarea></th>
                </tr> 

                <tr>
                    <th></th>
                    <td >
                        
                        <input type="submit" value="ajouter">&nbsp;&nbsp;
                        <input type="reset" value="effacer">

                    </td>

                </tr>

            </table>
        </form>



        <?php require "pied.html";   ?>
    </body>

</html>