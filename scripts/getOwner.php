<?php
    function getOwner()
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");   
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `owners` WHERE ID = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query); 
        if (!$result){
            $_SESSION["err"] = 1;
            exit();
        }
        else{
            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }


?>