<?php
include "../BDD/connexion.php";
$sqlQuery = 'SELECT * FROM categories';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$zone = $result->fetchAll();

if (isset($_POST["valider"])) {

  $req = $pdo->prepare("insert into images(nom,membres,description,id_cat,bin) values(?,?,?,?,?)");
  $req->execute(
    array(
      $_FILES["image"]["name"], $_POST["membres"],
      $_POST["description"], $_POST["id_cat"],
      file_get_contents($_FILES["image"]["tmp_name"])
    )
  );





}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
</head>

<body>
  <form name="fo" method="post" action="" enctype="multipart/form-data">

    <table>
      <tr>
        <input type="file" name="image" /><br>
      </tr>
      <tr>

        <th>Nom<input type="text" name="membres" required></th>
      </tr>
      <th>Description</th>
      <tr>

        <th><textarea name="description" rows="5" cols="33" required> </textarea></th>
      </tr>
      <tr>
        <td><label>Pays d'origine</label></td>
        <th>
          <select name="id_cat">
            <?php
            foreach ($zone as $zono) {
              echo '<option value="', $zono['id_decat'], '">', $zono['intitulé'], '</option>';
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