<?php
include "../BDD/connexion.php";


if (isset($_POST["valider"])) {

  $req = $pdo->prepare("insert into autre(intitulé,name,bin) values(?,?,?)");
  $req->execute(
    array(

      $_POST["intitulé"], $_FILES["image"]["name"],
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
        <input type="file" name="image" /> <br>
      </tr>
      <tr>

        <th>Nom<input type="text" name="intitulé" required></th>
      </tr>



    </table>
    <input type="submit" name="valider" value="charger">
  </form>
</body>
<html>