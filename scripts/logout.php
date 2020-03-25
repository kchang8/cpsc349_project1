<?php
        session_start();
        setcookie('pet-owner',"", time()-3600,"/");
        unset($_COOKIE['pet-owner']);
        if(isset($_SESSION)){
            unset($_SESSION["ID"]);
        }
        $_SESSION["err"] = 0;
        header ("Location: ../landing.php");

?>