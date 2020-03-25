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


    function getPendingPlaydates($ID){
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `playdates` WHERE OwnerID_responder = $ID AND `status`='Pending'";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);
        return $result;
    }

    function getReceivedPlaydates($ID){
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `playdates` WHERE OwnerID_creator = $ID AND `status`='Pending'";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);
        return $result;
    }

    function getConfirmedPlaydates($ID){
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `playdates` WHERE (OwnerID_creator = $ID OR OwnerID_responder = $ID) AND `status`='Confirmed'";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);
        return $result;
    }
    

    function getOwnerID($ID)
    {
        include 'Database_constants.php';
        $query = "SELECT * FROM `owners` WHERE `ID`=$ID";
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

    function getPetID($ID)
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $query = "SELECT * FROM `pets` WHERE ID = $ID";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);

        $_SESSION["err"] = 0;
        $row = mysqli_fetch_object($result);
        return $row;
    } 

    function getPetByOwner($ID)
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $query = "SELECT * FROM `pets` WHERE `OwnerID` = $ID";
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

    function getRandomPlayDate()
    {
        include 'Database_constants.php';
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        }
        $ID = $_SESSION["ID"];
        $query = "SELECT * FROM `playdateads` WHERE `OwnerID_creator` != $ID AND `status`!= 'Closed' ORDER BY RAND() LIMIT 1 ";
        $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
        $result = mysqli_query($conn,$query);
        $_SESSION["err"] = 0;
        $row = mysqli_fetch_object($result);
        return $row;
    }

/*
//IN THE MAKING
    /* function pawMe($row, $row2, $row3){
      session_start();

      include 'Database_constants.php';
      $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);

        $query = "INSERT INTO playdates (PetID_creator, OwnerID_creator, PetId_responder, OwnerID_responder, Time, State, City, status)
        $result = mysqli_query($conn,$query);
    }
 */


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
