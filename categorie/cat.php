<?php

$sql = new PDO(
  'mysql:host=localhost;dbname=tutophp;charset=utf8',
  'FranckAka',
  'Jesuisnoir.'
);




  $id = $_GET['id'];

  $sqlQuery = 'SELECT * FROM images  WHERE id_cat=?';
  $ver = $sql->prepare($sqlQuery);
  $ver->execute([$id]);
  $image = $ver->fetchAll();
  $total = $ver->rowCount();





?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Akakatsuki</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" type="image/x-icon" href="../image/icon.ico">
  <script defer src="../js/bootstrap.bundle.min.js"></script>

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
          foreach ($image as $image) {

            $imaget = $image['bin'];
            echo '<div class="imgperso col-md-3 col-sm-3">
              <a href="/aka/Akatsuki/menu/detail.php?id=', $image['id'], '">
              <img src="data:image/jpg;charset=utf8;base64,', base64_encode($imaget), '" class="bd-placeholder-img img-thumbnail" alt="Bootstrap" width="325px" height="435px" ></a>
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
      <div class="marg-200"></div>
  <div class="marg-100"></div>
</div>

  </div>

  <?php
  require('../html_partials/footer.php')
    ?>