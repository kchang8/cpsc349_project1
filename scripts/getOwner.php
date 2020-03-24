<?php
    function getOwner()
    {
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `owners` WHERE ID =$ID";
        $conn = mysqli_connect("localhost","San","1234", "petdatabase");
        $result = mysqli_query($conn,$query); 
        if (!$result){
            $_SESSION["err"] = 1;
            header("Location: profile.php");
        }
        else{
            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }


?>