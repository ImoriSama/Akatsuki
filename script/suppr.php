<?php
include "../bdd/connexion.php";

echo $_GET["id"];
$id=$_GET["id"];

$req = "DELETE FROM images WHERE id = ?";

$sup = $pdo->prepare($req);
$sup->execute([$id]);

header("Location: ../modif/tableau.php");

?>