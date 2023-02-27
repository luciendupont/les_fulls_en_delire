<?php
include "fr1.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM `region`;");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <title>lesregions</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container-fluid">
    <img src="1696529.svg"  width=200 alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">la france  nos  regions 
            <span class="visually-hidden"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lieu.php">lieu a decouvrir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pero.php">personnage celebre regional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </div>
</nav></header>
<div class="container">
    <div class="row p-8">

<?php foreach ($tableau as $region): ?>
        <div class="card col-lg-3 col-12 m-4" style="width:25rem;"id="card">
            <div class="row">
                <img src="<?= $region->pic_region?>" style="max-width:100%;height:auto" class="card-img-top  col-6 " id="imgcard" alt="mage">
                    <div class="card-body col-6">
                    <p class="text-right">capitale  regional:<?= $region->cap_region?>
                    <p class="text-right">numeros de departement de la region:<?= $region->dep_region?>
                    <p class="text-right">superficie regional:<?= $region->superfi_region ?>
                    <p class="text-right">pib regional:<?= $region->pib_region?>
                    </div>
            </div>
                
        </div>
        <?php endforeach; ?>
    </nav><section></section>
    <article>
      
    
    </article>
    <footer></footer>
    <aside></aside>
</body>
</html>