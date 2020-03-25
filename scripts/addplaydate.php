<?php
    session_start();
    include 'Database_constants.php';
    include 'getOwner.php';
    $HOST_ID = $_POST["adOwnerID"];
    $HOST_PET = $_POST["adPetID"];
    $HOST_TIME = $_POST["time"];
    $ID = $_SESSION["ID"];
    $pet = getPetByOwner($ID);
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    $query = "UPDATE `playdates` SET `OwnerID_responder` = $ID, `PetID_resoponder`= $pet->ID, `status`='confirmed' WHERE `OwnerID_creator` = $HOST_ID AND `PetID_creator`=$HOST_PET and `Time` = `$HOST_TIME`";
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    $result = mysqli_query($conn,$query);
    $result = mysqli_query($conn,$query); 
    if(!mysqli_commit($conn)){
        print("Transaction Failed");
        exit();
    }
    header("Location: ../paw.php");
?>