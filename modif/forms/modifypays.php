<?php

include "../../BDD/connexion.php";

$id = $_GET["id"];
$sqlQuery = 'SELECT * FROM categories where id_decat= ?';
$result = $pdo->prepare($sqlQuery);
$result->execute([$id]);
$zone = $result->fetchAll();




if (isset($_POST["valider"])){
  $req = $pdo->prepare("UPDATE categories SET intitulé=? ,description=? ,bin=? where id_decat=$id ");
  $req->execute(
    array(
      $_POST["intitulé"], $_POST["description"], file_get_contents($_FILES["image"]["tmp_name"])
    )
  );
}

foreach($zone as $zono){

echo "<form name='fo' method='post' action='' enctype='multipart/form-data'>

<table>
  <tr>
    <input type='file' name='image' /><br>
  </tr>
  <tr>

    <th>Nom<input type='text' name='intitulé' value='",$zono['intitulé'],"' required></th>
  </tr>
  <th>Description</th>
  <tr>

    <th><textarea name='description' rows='5' cols='33' required> ",$zono['description']," </textarea></th>
  </tr>

</table>
<input type='submit' name='valider' value='charger'>
<a href='../../script/redirect.php'><button type='button'>Retour</button></a>
</form>
</body>";
};


?>
<br>
