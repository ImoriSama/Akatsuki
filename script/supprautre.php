<?php
include "../bdd/connexion.php";

echo $_GET["id"];
$id=$_GET["id"];

$req = "DELETE FROM autre WHERE id_im = ?";

$sup = $pdo->prepare($req);
$sup->execute([$id]);

header("Location: ../modif/tableauautre.php");

?>