<?php
include "../bdd/connexion.php";

$req = "UPDATE etudiant SET nom=:nomEtud, prenom=:prenomEtud, numRue=:numRueEtud, nomRue=:nomRueEtud, cp=:cpEtud, ville=:villeEtud, tel=:telEtud, email=:emailEtud, id_classe=:id_classe WHERE id = :id";

$insertEtud = $sql->prepare($req);
$insertEtud->execute([
    'id'=>$_POST['Id'],
    'nomEtud'=>$_POST['image'],
    'prenomEtud'=>$_POST['membres'],
    'numRueEtud'=>$_POST['description'],
    'nomRueEtud'=>$_POST['Nomrue']
]);

header("Location: ../index.php")
?>
<a href="index.php">retour</a>