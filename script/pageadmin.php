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
  <link rel="icon" type="image/x-icon" href="../image/icon.ico">
</head>
<body>
<center>
<form method="post" action="conexadmin.php">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Entrez votre username et mot de passe</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Mot de passe</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
