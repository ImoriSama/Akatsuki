<?php
$sql = new PDO(
  'mysql:host=localhost;dbname=tutophp;charset=utf8',
  'FranckAka',
  'Jesuisnoir.'
);

$sqlQuery = 'SELECT * FROM categories';
$ver = $sql->prepare($sqlQuery);
$ver->execute();
$categ = $ver->fetchAll();
?>
<nav class="css-navbar navbar navbar-expand-lg  navbar-dark w-100 banner">
  <div class="container">
    <a class="css-text navbar-brand" href="/aka/Akatsuki/index.php">
      <img src="/aka/Akatsuki/image/MicrosoftTeams-image-removebg.png" alt="Bootstrap" width="90" height="60">
      Akatsuki
    </a>

    <ul class="nav">
      <li class="nav-item pe-2">
        <a class=" css-pages nav-link active" href="/aka/Akatsuki/menu/Personnages.php">Personnages</a>
      </li>

      <li class="nav-item pe-2">
        <a class="css-pages nav-link" href="/aka/Akatsuki/menu/histoire.php">Histoire</a>
      </li>

      <li class="nav-item pe-2">
        <a class="css-pages nav-link" href="/aka/Akatsuki/menu/Pays.php">Pays</a>
      </li>


      <li class="nav-item pe-2 dropdown">
        <a class="css-pages nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorie
        </a>
        <ul class="dropdown-menu">
          <?php foreach ($categ as $catego) { ?>
            <li><a class="dropdown-item"
                href="/aka/Akatsuki/categorie/cat.php?id=<?php echo "", $catego['id_decat'], "" ?>"><?php echo "", $catego['intitulé'], "" ?></a></li>
          <?php } ?>

          <li>
            <hr class="dropdown-divider">
          </li>

        </ul>
      </li>

      <li class="nav-item pe-2">
        <a class="css-pages nav-link" href="/aka/Akatsuki/script/pageadmin.php">Admin</a>
      </li>

    </ul>


  </div>

</nav>