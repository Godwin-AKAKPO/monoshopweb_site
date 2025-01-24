<?php
    session_start();

    if (isset($_SESSION['ehthtyntty'])){
        $_SESSION['ehthtyntty']=array();

        session_destroy();

        header("Location: ../");
    }else {
        header("Location: ../login.php");
    }
   
?>