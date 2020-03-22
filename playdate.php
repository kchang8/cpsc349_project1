<?php
    session_start();
    if(isset($_COOKIE["Pet_Owner"])){
        $_SESSION['ID']=$_COOKIE["Pet_Owner"][name];
        $_SESSION['retry'] =0;
        $_SESSION["time"] = time();
        header ("Location: playdate.html");
    }
    else{
        header ("Location: login.php");
    }

?>