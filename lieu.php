<?php
include "fr1.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM `lieu`;");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>lieu</title>
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
    <?php foreach ($tableau as $lieu):?>   
      <div class="col-9"><br>
      <div class="card" style="width: 18rem;"> 

       
  <img class="card-img-top" src="<?= $lieu->pic_lieu?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">region  :<br></lieu:br><?= $lieu->region_lieu?></h5>
    <h5 class="card-title">departement:<br></regional:br><?= $lieu->dep_lieu?></h5>
    <h5 class="card-title">nom  :<?= $lieu->name_lieu?></h5>
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
</body>
</html>