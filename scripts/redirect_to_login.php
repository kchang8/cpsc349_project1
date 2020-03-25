<?php
function redirect_to_login(){
    if(isset($_SESSION["ID"])){
        echo  "<script> console.log(\"The session is set\") </script>";
    }
    else{
        $_SESSION["err"]=0;
        echo  "<script> console.log(\"The session is not set\") </script>";
        //header ("Location: login.php");
    }
}
?>