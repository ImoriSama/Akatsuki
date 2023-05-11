<?php

include "../BDD/connexion.php";

$sqlQuery = 'SELECT * FROM categories WHERE id_decat != 6';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$etudiants = $result->fetchAll();

$sqlQuery = 'SELECT * FROM autre where intitulé = "Carte_du_Monde"';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$map = $result->fetchAll();

?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Akakatsuki</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="back">
  <?php
  require('../html_partials/menu.php')
    ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-sm-9">
        <div class="marg-50"></div>
        <center class="marg-both-50">
          <h1>Les Villages</h1>
          <div class="marg-100"></div>
          <?php

          foreach ($map as $mapo) {

            echo '<img src="data:image/png;charset=utf8;base64,', base64_encode($mapo['bin']), '" class="bd-placeholder-img img-thumbnail" alt="Bootstrap" width="700px" height="700px">';
              
          }
          ;?>
          <div class="marg-50"></div>
          <div>
            <br>

            <h3>
              Le monde Naruto est un monde vaste et remplis de differents pays mais aujourd'hui seuls les 5 grands
              pays nous intersse avec leur villages ninja.
            </h3>

          </div>


          <?php
          $i = 0;
          foreach ($etudiants as $image) {

            $imaget = $image['bin'];
            echo '<h4> ', $image['intitulé'], ' </h4>';
            echo '<div class="imgperso col-md-3 col-sm-3">
              <img src="data:image/png;charset=utf8;base64,', base64_encode($imaget), '" class="bd-placeholder-img img-thumbnail" alt="Bootstrap" width="325px" height="435px" >
              </div> <div class="marg-20"></div>';

            echo '<p> ', $image['description'], ' </p> <div class="marg-50"></div>';

            $i++;
          }

          ?>
        </center>
      </div>

      <?php
      require('../html_partials/sidebar.php')
        ?>
    </div>
  </div>
  <?php
  require('../html_partials/footer.php')
    ?>

  <script src="../js/bootstrap.bundle.min.js"></script>