<?php
    require("config/commandes.php");

    $Produits = afficher();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Mon Site de e-commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">    
    </script>
    <style>
      .card img {
          width: 100%;
          height: 220px;
          object-fit: cover;
      }

      .card {
          min-height: 350px;
      }

      /*.card-body {
        height: 150px;
        overflow: hidden;
      }*/
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">A propos</h4>
          <p class="text-muted">Bienvenue sur ma plateforme de e-commerce ou je partage mes différents articles, leurs images, leurs prix ainsi que leurs description. Je vous promet que vous ne seres pas décu vous y trouverez des trucs très intéressants et vous serez captiver je vous le promet Merci chers internautes.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Administration</h4>
          <ul class="list-unstyled">
            <li><a href="login.php" class="text-white">Se connecter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>GODWIN_SHOP</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($Produits as $produit):   ?>
            <div class="col">
            <div class="card shadow-sm">
                <h4><?= $produit->nom ?></h4> <img src="<?= $produit->img ?>">

                <div class="card-body">
                <p class="card-text"><?= substr($produit->descriptionn, 0, 200) ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                    </div>
                    <small class="text-muted"><?=  $produit->prix ?> FCFA</small>
                </div>
                </div>
            </div>
            </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</main>      

</body>
</html>
