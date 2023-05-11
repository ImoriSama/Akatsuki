<?php

$envoyer = "Envoyer";
$annuler = "Annuler ";
$log = " ";
$password = " ";
?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Akakatsuki</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="back">
<center>
<form class="marg-150" method="post" action="conexadmin.php">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" required name="username"></td>
        </tr>
        <tr>
            <td>code access</td>
            <td><input type="password" required name="pass"></td>
        </tr>
        <tr>
            <td><input type="submit" name="envoyer"></td>
            <td><input type="reset" name="Annuler"></td>
        </tr>
</form>
</center>
</body>
<?php


if (isset($_POST["log"]) && isset($_POST["password"])){
echo $_POST["log"]," ",$_POST["log"];
?>

<?php
}
?>
