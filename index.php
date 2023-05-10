<html>
    <head>
        <meta charset="UTF-8">
        <title>Akakatsuki</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="back">
    <?php
    require('./html_partials/menu.php')
    ?>
      <div>

      <div class="bg-image background-accueil"></div>
      <div class="container marg-bt-100">
        <img src="image/itachibg.png" class="moving">
        <div class="naruto"></div>
        </div>
      </div>






        <!--<img src="image/bannier.jpg" class="img-fluid photo marg-bt-50" alt="..."></div>-->
        <div class="container-fluid">
          <div class="row">           
            <div class="col-md-9 col-sm-9"> 
              <div class="text-center marg-both-50">
              <h1>Bienvenue sur <span class="text-white">Akatsuki</span></h1>
              <div class="marg-bt-50"></div>
              <h2><u>Le site référence</u> pour en apprendre plus sur l'Akatsuki</h2>
              <h4><i>C'est quoi? C'est qui?</i></h4>
              <div class="marg-bt-50"></div>
              <p>L'Akatsuki (暁, Akatsuki, signifiant littéralement : « Aube » ou « Lever du jour ») est un groupe de shinobi, affranchi du système dépendant des villages cachés, représentant l'organisation criminelle la plus activement recherchée dans le monde ninja. Au cours de plusieurs décennies, Akatsuki a connu différents dirigeants et buts. Bien que chaque recrue ait un passé criminel, tous cherchent à rendre le monde meilleur par leurs propres moyens. Exceptés Konan et Nagato, ses membres sont tous des ninjas répertoriés au Bingo Book. Son objectif affiché est la domination du monde et pour ce faire, leurs membres jouent les mercenaires auprès des différents pays et tentent de capturer tous les bijû afin de ramener Jûbi à la vie et d'instaurer une « paix » durable.</p>

            </div>
          </div>
          <?php require('html_partials/sidebar.php') ?>
          </div>

        </div>
        <div class="marg-bt-200"></div>



        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
    <?php
    require('./html_partials/footer.php')
    ?>
</html>
