<?php

    function ajouter($image, $nom, $prix, $desc)
    {
        if (require("connexion.php")) {
           
            $req = $access->prepare("INSERT INTO produits (img, nom, prix, descriptionn) VALUES (?, ?, ?, ?)");
            
        
            $req->execute(array($image, $nom, $prix, $desc));
            
          
            $req->closeCursor();
        }
    }

    function modifier($image, $nom, $prix, $desc, $id)
    {
        if (require("connexion.php")) {
           
            $req = $access->prepare("UPDATE produits SET img = ?, nom = ?, prix = ?, descriptionn = ? WHERE id =?");
            
        
            $req->execute(array($image, $nom, $prix, $desc, $id));
            
          
            $req->closeCursor();
        }
    }


    function afficher()
    {
        if (require("connexion.php"))
        {
            $req =  $access->prepare("SELECT * FROM produits ORDER BY id ASC");

            @$req ->execute();

            $data = $req ->fetchAll(PDO:: FETCH_OBJ);

            return $data;

            $req ->closeCursor();
        }
    }

    function supprimer($id)
    {
        if (require("connexion.php"))
        {
            $req = $access->prepare("DELETE FROM produits WHERE id = ?");
            
            $req -> execute(array($id));

            $req ->closeCursor();
        }

    }

    function getAdmin($email, $motdepasse)
    { 
        if (require("connexion.php")) {
            
            $req = $access->prepare("SELECT * FROM adminn WHERE email = ? AND motdepasse = ? ");
            
        
            $req->execute(array($email, $motdepasse));

           

            if ($req->rowCount() == 1)
            {
                $data = $req->fetch();

                return $data;
            } else 
            {
                return false;
            }
            
            $req->closeCursor();
           
        }
    }

    function getProduit($id)
    { 
        if (require("connexion.php")) {
            
            $req = $access->prepare("SELECT * FROM produits WHERE id = ?  ");
            
        
            $req->execute(array($id));

           

            if ($req->rowCount() == 1)
            {
                $data = $req->fetchALL(PDO::FETCH_OBJ);

                return $data;
            } else 
            {
                return false;
            }
            
            $req->closeCursor();
           
        }
    }
?>
