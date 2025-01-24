<?php
    session_start();

    include "config/commandes.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GodwinShop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" name="email" required style="width: 80%" >
                       
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="motdepasse" required style="width: 80%" >
                    </div>
                    <input type="submit" class="btn btn-danger" name ="envoyer" value="Se connecter">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
</body>
</html>


<?php
    if (isset($_POST['envoyer'])){
        if (!empty($_POST['email']) AND !empty($_POST['motdepasse']))
        {
            $email = $_POST['email'];
            $motdepasse = $_POST['motdepasse'];

            $admin = getAdmin($email, $motdepasse);
            var_dump($admin);

            if ($admin)
            {
                $_SESSION['ehthtyntty']= $admin;

                header("Location: admin/index.php");
            } else 
            {
                echo "Il y a un problème  avec les identifiants entrées";
            }

        }
    }



?>


