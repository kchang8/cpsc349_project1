<?php
    session_start();
    include 'Database_constants.php';
    include 'getOwner.php';
    $HOST_ID = $_POST["adOwnerID"];
    $HOST_PET = $_POST["adPetID"];
    $HOST_TIME = $_POST["time"];
    $HOST_AD = $_POST["adID"];
    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;
    echo $HOST_ID;
    echo $HOST_PET;
    echo $HOST_TIME;
    echo $HOST_TIME[10]=" ";
    $HOST_TIME.=":00";
    echo $HOST_TIME;
    $ID = $_SESSION["ID"];
    $owner =getOwnerID($HOST_ID);
    $us  =getOwnerID($ID);
    $pet = getPetByOwner($ID);
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    $query ="INSERT INTO `playdates` (`PetID_creator`, `OwnerID_creator`, `PetID_responder`, `OwnerID_responder`, `Time`, `State`, `City`,`adID`";
    $query.=") VALUES ('$HOST_PET', '$HOST_ID', '$pet->ID', '$ID', '$HOST_TIME', '$us->state', '$us->city', '$HOST_AD');";
    if (!mysqli_query($conn,$query)) {
        printf("Error message: %s\n", mysqli_error($conn));
    }
    if(!mysqli_commit($conn)){
        print("Transaction Failed");
        exit();
    }
    header("Location: ../paw.php");
?>