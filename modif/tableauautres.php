<?php

include "../BDD/connexion.php";

$sqlQuery = 'SELECT * FROM autre';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$autre = $result->fetchAll();




echo '<table border="1">';
echo '<tr>
<th>id_im</th>
<th>intitulé</th>
<th>name</th>




<th colspan=2></th>
</tr>';

foreach ($autre as $autro) {
    echo "<tr>";
    echo "<td>",$autro["id_im"],"</td>";
    echo "<td>",$autro["intitulé"],"</td>";
    echo "<td>",$autro["name"],"</td>";
   

    echo '<td><a href="./forms/modifyautre.php?id=',$autro["id_im"],'">Modifier</a></td>';
    echo '<td><a href="../script/supprautre.php?id=',$autro["id_im"],'">Supprimer</a></td>';
    echo "</tr>";
    
};
echo "</table>";

?>

<a href="../script/redirect.php"><button type="button">Retour</button></a>