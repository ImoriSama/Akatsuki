<?php
include "../BDD/connexion.php";
$sqlQuery = 'SELECT * FROM categories';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$zone = $result->fetchAll();

    if (isset($_POST["valider"])){

      $req=$pdo->prepare("insert into images(nom,taille,type,bin) values(?,?,?,?)");
      $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES[
        "image"]["type"],file_get_contents($_FILES["image"]["tmp_name"])));

      $req=$pdo->prepare("select id from images where nom=?");
      $req->execute(array($_FILES["image"]["name"]));

      $image=$req->fetchAll();

      $req=$pdo->prepare("insert into membres(id_membres,name,id_cat,id_image) values(0,?,?,?)");
      foreach ($image as $id) {
         $req->execute(array($_POST["name"],$_POST["id_cat"],$id[0]));
      }
     
    }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <?php
    require('../html_partials/menu.php')
    ?>
    <form name="fo" method="post" action="" enctype="multipart/form-data">
      
    <table>
     <tr>
       <input type="file" name="image"/><br>
     </tr>
     <tr>
            
       <th><input type="text" name="name" required></th>
     </tr>
     <tr>
      <td><label>Pays d'origine</label></td>
            <th>
            <select name="id_cat">
     <?php
      foreach($zone as $zono){
                echo '<option value="',$zono['id_decat'],'">',$zono['intitulé'],'</option>';
            }
    
    ?>
    </select>
            </th>
      </tr>
    </table>
      <input type="submit" name="valider" value="charger">
    </form>
  </body>
<html>