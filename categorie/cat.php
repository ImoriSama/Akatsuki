<?php

$sql = new PDO(
  'mysql:host=localhost;dbname=tutophp;charset=utf8',
  'FranckAka',
  'Jesuisnoir.'
);


if (isset($_GET["id"])) {

  $id = $_GET['id'];

  $sqlQuery = 'SELECT * FROM images  WHERE id_cat=?';
  $ver = $sql->prepare($sqlQuery);
  $ver->execute([$id]);
  $image = $ver->fetchAll();


} else {
  $sqlQuery = 'SELECT * FROM images';
  $ver = $sql->prepare($sqlQuery);
  $ver->execute();
  $image = $ver->fetchAll();
}

?>
<html>

<head>
  <meta charset="UTF-8">
  <title>Akakatsuki</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
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
          $i = 0;
          foreach ($image as $image) {

            $imaget = $image['bin'];
            echo '<div class="imgperso col-md-3 col-sm-3">
              <a href="/aka/Akatsuki/menu/detail.php?id=', $image['id'], '">
              <img src="data:image/jpg;charset=utf8;base64,', base64_encode($imaget), '" class="bd-placeholder-img img-thumbnail" alt="Bootstrap" width="325px" height="435px" ></a>
              </div>';
            $i++;
          }

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