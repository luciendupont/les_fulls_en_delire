<?php
include "fr1.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM region");
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

    <title>noms des  regions</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form action="http://bienvu.net/script.php" method="POST" class="col-12">
            <div class="form-group">
                <p>* Ces zones sont obligatoires</p>

                <legend>Vos coordonnées</legend>
                <div class="row">
                    <div class="col">

                        <label for="Nom"> Votre Nom* :</label> <input type="text" name="nom" id="nom"
                            class="form-control" required>
                        <span id="nom_manquant"></span>
                    </div>

                    <div class="col">
                        <label for="Prénom"> Votre Prénom* : </label><input type="text" name="prenom" id="prenom"
                            class="form-control" required>
                        <span id="prenom_manquant"></span>
                    </div>
                </div>
                <br>

                <label for="Sexe"> Sexe* : </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="Féminin" required> <label
                        class="form-check-label" for="Féminin"> Féminin </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="Masculin" required> <label
                        class="form-check-label" for="Masculin"> Masculin </label><br>
                    <span id="sexe_manquant"></span>
                </div>
                <br>
                <div> <label for="DatedeNaissance"> Date de Naissance* : </label><input type="date"
                        name="Date de Naissance" id="date" class="form-control col-8" required>
                </div>
                <span id="date_manquant"></span>
                <br>
                <div><label for="adresse"> Adresse* :</label><input type="text" name="adresse" id="adresse"
                        class="form-control col-8" required>
                    <span id="adresse_manquant"></span>
                </div>
                <br>

                <div><label for="CodePostal"> Code postal* : </label><input type="text" name="Code postal"
                        id="codepostal" class="form-control col-8" required>
                    <span id="code_manquant"></span>
                </div>
                <br>

                <div><label for="Ville"> Ville : </label><input type="text" name="Ville" id="ville"
                        class="form-control col-8" required></div>
                <span id="ville_manquant"></span>
                <br>

                <div><label for="Email"> Email* :</label> <input type="email" name="Email"
                        placeholder="dave.loper@afpa.fr" id="mail" class="form-control col-8" required>
                    <span id="mail_manquant"></span>
                </div>
                <legend>Votre demande</legend>

                <label for="Sujet"> Sujet* :
                </label>
                <select name="sujet" size="1" id="sujet" class="form-control col-8" required>
                    <option value="">--Veuillez choisir un sujet--</option>
                    <option value="MesCommandes">Mes commandes</option>
                    <option value="QuestionSurUnProduit">Question sur un produit</option>
                    <option value="Réclamation">Réclamation</option>
                    <option value="Autres">Autres</option>
                </select>
                <span id="sujet_manquant"></span>
                <br>

                <div><label for="Question"> Votre question* :</label> <textarea name="VotreQuestion" id="question"
                        class="form-control col-8" required></textarea>
                    <span id="question_manquant"></span>
                </div>
                <br>

                <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" required name="accord" value="accord" class="custom-control-input"
                        id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">J'accepte le traitement informatique de ce
                        formulaire</label>
                    <div class="valid-feedback">Champs Valide</div>
                    <div class="invalid-feedback">Cochez cette case pour continuer</div>
                </div>
                <span id="customCheck1_manquant"></span>

                <p><input type="submit" name="Envoyer" value="Envoyer" id="bouton_envoi">
                    <input type="reset" name="Annuler" value="Annuler">
                </p>
            </div>
        </form>
</body>
</html>