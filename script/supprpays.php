<?php
include "../bdd/connexion.php";

echo $_GET["id"];
$id=$_GET["id"];

$req = "DELETE FROM categories WHERE id = ?";

$sup = $pdo->prepare($req);
$sup->execute([$id]);

header("Location: ../modif/tableaupays.php");

?>