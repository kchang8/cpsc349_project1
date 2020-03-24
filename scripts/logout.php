<?php
        setcookie('pet-owner',"", time()-3600,"/");
        unset($_COOKIE['pet-owner']);
        if(isset($_SESSION)){
            unset($_SESSION["ID"]);
        }
        header ("Location: ../home.html");

?>