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
<th>id_decat</th>
<th>intitulé</th>
<th>description</th>



<th colspan=2></th>
</tr>';

foreach ($categ as $catego) {
    echo "<tr>";
    echo "<td>",$catego["id_decat"],"</td>";
    echo "<td>",$catego["intitulé"],"</td>";
    echo "<td>",$catego["description"],"</td>";

    echo '<td><a href="./forms/modifypays.php?id=',$catego["id_decat"],'">Modifier</a></td>';
    echo '<td><a href="../script/suppr.php?id=',$catego["id_decat"],'">Supprimer</a></td>';
    echo "</tr>";
    
};
echo "</table>";

?>

<a href="../script/redirect.php"><button type="button">Retour</button></a>