<?php

include "../../BDD/connexion.php";

$id = $_GET["id"];
$sqlQuery = 'SELECT * FROM autre where id_im= ?';
$result = $pdo->prepare($sqlQuery);
$result->execute([$id]);
$autre = $result->fetchAll();




if (isset($_POST["valider"])){
  $req = $pdo->prepare("UPDATE autre SET intitulé=? ,name=? ,bin=? where id_im=$id ");
  $req->execute(
    array(

      $_POST["intitulé"], $_FILES["image"]["name"],
      file_get_contents($_FILES["image"]["tmp_name"])
    )
  );

}

foreach($autre as $autro){

echo "<form name='fo' method='post' action='' enctype='multipart/form-data'>

<table>
  <tr>
    <input type='file' name='image' /><br>
  </tr>

  <th>Name</th>
  <tr>

    <th><textarea name='description' rows='5' cols='33' required> ",$autro['intitulé']," </textarea></th>
  </tr>

</table>
<input type='submit' name='valider' value='charger'>
</form>
</body>";
};


?>
<br>
