<?php

include "../BDD/connexion.php";

$sqlQuery = 'SELECT * FROM images';
$result = $pdo->prepare($sqlQuery);
$result->execute();
$etudiants = $result->fetchAll();

$total = $result->rowCount();




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
        <div class="row">


          <?php
          if ($total>0){
          $i = 0;
          foreach ($etudiants as $image) {

            $imaget = $image['bin'];
            echo '<div class="imgperso col-md-3 col-sm-3">
              <a href="detail.php?id=', $image['id'], '"><img src="data:image/jpg;charset=utf8;base64,', base64_encode($imaget), '" class="bd-placeholder-img img-thumbnail" alt="Bootstrap" width="325px" height="435px" ></a>
              </div>';
            $i++;
          }
        }else{ echo "<center><div class='marg-50'><h1> Il n'y a pas de personnages venant de se pays </h1></div><center>" ;}

          ?>
        </div>
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