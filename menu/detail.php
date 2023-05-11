<?php

include "../BDD/connexion.php";

$id = $_GET["id"];


$sqlQuery = 'SELECT * FROM images  WHERE id= ?';
$ver = $pdo->prepare($sqlQuery);
$ver->execute([$id]);
$image = $ver->fetchAll();



$sqlQuery = 'SELECT * FROM categories ';
$ver = $pdo->prepare($sqlQuery);
$ver->execute();
$categ = $ver->fetchAll();




?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Akakatsuki</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../image/icon.ico">
</head>

<body class="back">
  <?php
  require('../html_partials/menu.php')
    ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 col-sm-9">
            <?php echo
              '<center><img src="data:image/jpg;charset=utf8;base64,', base64_encode($image[0]['bin']), '"class="marg-20 bd-placeholder-img img-thumbnail" alt="Bootstrap" width="325px" height="435px">
                <div>
                  <div class="marg-20"><a href="../categorie/cat.php?id=', $image[0]['id_cat'], '"> ', $categ[$image[0]["id_cat"] - 1]["intitulé"], ' </a></div>

                    <p class="marg-both-50">', $image[0]["description"], '</p>
  
                </div>
              </div></center>'; ?>

        <?php
        require('../html_partials/sidebar.php')
          ?>
      </div>

    </div>
    <?php
    require('../html_partials/footer.php')
      ?>

    <script src="../js/bootstrap.bundle.min.js"></script>