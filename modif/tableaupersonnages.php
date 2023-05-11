<?php

include "../BDD/connexion.php";

$sqlQuery = 'SELECT * FROM images';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$image = $result->fetchAll();

$sqlQuery = 'SELECT * FROM categories';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$categ = $result->fetchAll();



echo '<table border="1">';
echo '<tr>
<th>Id</th>
<th>Nom</th>
<th>membres</th>
<th>description</th>
<th>id_cat</th>


<th colspan=2></th>
</tr>';

foreach ($image as $imageo) {
    echo "<tr>";
    echo "<td>",$imageo["id"],"</td>";
    echo "<td>",$imageo["nom"],"</td>";
    echo "<td>",$imageo["membres"],"</td>";
    echo "<td>",$imageo["description"],"</td>";
    foreach($categ as $catego){
        if($catego["id_decat"] == $imageo["id_cat"]){
            echo "<td>",$catego["intitulé"],"</td>";
        }
    }
    echo '<td><a href="./forms/modify.php?id=',$imageo["id"],'">Modifier</a></td>';
    echo '<td><a href="../script/suppr.php?id=',$imageo["id"],'">Supprimer</a></td>';
    echo "</tr>";
    
};
echo "</table>";

?>

<a href="../script/redirect.php"><button type="button">Retour</button></a>