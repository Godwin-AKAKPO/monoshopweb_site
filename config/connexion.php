<?php
    try {
          
        $access = new PDO("mysql:host=localhost;dbname=monoshop;charset=utf8", "root", "");

        $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {

        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
    
  

?>