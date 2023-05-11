<?php
include "../BDD/connexion.php";

if (isset($_POST["valider"])) {

  $req = $pdo->prepare("insert into categories(intitulé,description,bin) values(?,?,?)");
  $req->execute(
    array(
      $_POST["intitulé"],
      $_POST["description"],
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

        <th>Nom<input type="text" name="intitulé" required></th>
      </tr>
      <th>Description</th>
      <tr>

        <th><textarea name="description" rows="5" cols="33" required> </textarea></th>
      </tr>

    </table>
    <input type="submit" name="valider" value="Charger">
    <a href="../script/redirect.php"><button type="button">Retour</button></a>
  </form>
</body>
<html>