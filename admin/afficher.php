<?php
    session_start();

    if (!isset($_SESSION['ehthtyntty'])){
          header("Location: ../login.php");
    }
    if (empty($_SESSION['ehthtyntty'])){
          header("Location: ../login.php");
    }

    require("../config/commandes.php");

    $Produits=afficher();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">    
    </script>
    <title>Tous les produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">GODWIN_SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../admin" >Nouveau</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="supprimer.php" >Supression</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="afficher.php" style="font-weight: bold">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" >Modification du produit</a>
            </li>
        </ul>
        <div style="display-flex : flex; justify-content: flex-end">
            <a href="deconnexion.php" class ="btn btn-danger">Se deconnecter</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Descrpition</th>
                        <th scope="col">Editer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Produits as $Produit): ?>

                            <tr>
                                <th scope="row"><?= $Produit->id ?></th>
                                <td><img src="<?= $Produit->img ?>" style="width: 20%"></td>
                                <td><?= $Produit->nom ?></td>
                                <td style="font-weight : bold; color: green;"><?= $Produit->prix ?>FCFA</td>
                                <td><?= substr($Produit->descriptionn, 0, 100)?>...</td>
                                <td>
                                    <a href="editer.php?pdt=<?=$Produit->id ?>"><i class ="fa fa-pencil" style ="font-size: 40px";></i></a>
                                </td>
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>

