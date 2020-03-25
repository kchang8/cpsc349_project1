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
            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
    }
    //used for playdate to grab row
    function getPlaydate()
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `playdates` WHERE OwnerID_creator = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);

            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
    }
    // owner pet
    function getPet()
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `pets` WHERE OwnerID = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);

            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
    }

    //RANDOM Owner
    function getRandomOwner()
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM owners WHERE ID != $ID ORDER BY RAND() LIMIT 1 ";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);
        $_SESSION["err"] = 0;
        $row = mysqli_fetch_object($result);
        return $row;
    }



    //given ID from get playdate grab responder owner
    function getOwner2($ID)
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }

        $query = "SELECT * FROM `owners` WHERE ID = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);

            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
    }

    //given ID from get playdate grab responder pet
    function getpet2($ID)
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }

        $query = "SELECT * FROM `pets` WHERE OwnerID = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);

            $_SESSION["err"] = 0;
            $row = mysqli_fetch_object($result);
            return $row;
    }


?>
