<?php

include "../../BDD/connexion.php";
$sqlQuery = 'SELECT * FROM categories';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$zone = $result->fetchAll();

$id = $_GET["id"];

$req = "SELECT * FROM images WHERE id = ?";
$sup = $pdo->prepare($req);
$sup->execute([$id]);

$etudiants = $sup->fetchAll();

if (isset($_POST["valider"])){

  $req=$pdo->prepare("UPDATE images SET nom=?, membres=?, description=?, id_cat=?, bin=? WHERE id=$id ");
  $req->execute(array($_FILES["image"]["name"],$_POST["membres"],$_POST["description"],$_POST["id_cat"],file_get_contents($_FILES["image"]["tmp_name"])));

}

foreach($etudiants as $tablo){

echo "  <form name='fo' method='post' action='' enctype='multipart/form-data'>

<table>
  <tr>
    <input type='file' name='image' required><br>
  </tr>
  <tr>

    <th>Nom<input type='text' name='membres' value='",$tablo['membres'],"' required></th>
  </tr>
  <th>Description</th>
  <tr>

    <th><textarea name='description' rows='5' cols='33' required> ",$tablo['description']," </textarea></th>
  </tr>
  <tr>
    <td><label>Pays d'origine</label></td>
    <th>
      <select name='id_cat'>
   
        "; foreach ($zone as $zono) {
          echo '<option value="', $zono['id_decat'], '">', $zono['intitulé'], '</option>';
        }; echo"


      </select>
    </th>
  </tr>
</table>
<input type='submit' name='valider' value='charger'>
<a href='../../script/redirect.php'><button type='button'>Retour</button></a>
</form>
</body>";
};

?>
<br>
