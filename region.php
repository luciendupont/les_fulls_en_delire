<?php
include "fr1.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM `region`;");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <link rel="stylesheet" href="1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>voyage</title>
</head>
<body>

    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"> <img src="1696529.svg"  width=20 alt="">
    <a class="navbar-brand" href="region.php">acceuil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="region.php">region
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lieu.php">lieu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perso.php">personnage</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
   <article>


  
    <div class="container">
    <div class="col-6 ">
    <?php foreach ($tableau as $region):?>   
      <div class="col-9">
      <div class="card" style="width: 18rem;"> 

       
<img class="card-img-top" src="<?= $region->pic_region?>" alt="Card image cap">
<div class="card-body col">
  <h5 class="card-title"><?= $region->name_region?></h5>
  <p class="card-title">capitale  regional:<?= $region->cap_region?></p>
  <p class="card-title">nombre d'habitant dans la region :<br><?= $region->nbhabit_region?></p>
  <p class="card-title">departement de la region:<?= $region->dep_region?></p>
</div>
</div>
      </div>

      <?php endforeach; ?>
</div>
</div>
  
    </article>
    <footer>
    <ul>
        <li>Mentions légales</li>
        <li>Nous contacter</li>
    </ul>
    </footer>
    <aside>

    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>