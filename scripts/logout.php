<?php
        session_start();
        setcookie('pet-owner',"", time()-3600,"/");
        if(isset($_SESSION)){
            unset($_SESSION["ID"]);
        }
        $_SESSION["err"] = 0;
        if(isset($_COOKIE['pet-owner'])){
        echo  "<script> console.log(\"The cookie is set\") </script>";
        }
        header ("Location: ../landing.php");

?>