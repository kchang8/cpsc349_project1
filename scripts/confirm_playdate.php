<?php
    session_start();
    include 'Database_constants.php';
    include 'getOwner.php';
    $HOST_ID = $_POST["confirmOwnerID"];
    $HOST_PET = $_POST["confirmPetID"];
    $HOST_TIME = $_POST["confirmtime"];
    $HOST_AD = $_POST["confirmAdID"];
    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;

    $HOST_TIME.=":00";
    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;
    $ID = $_SESSION["ID"];
    $pet = getPetByOwner($ID);
    $query = "UPDATE `playdates` SET `status` = 'Confirmed' WHERE `OwnerID_creator` = $ID AND `PetID_creator`= $pet->ID AND `Time` = '$HOST_TIME'";
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannont connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    if (!mysqli_query($conn,$query)) {
        printf("Error message: %s\n", mysqli_error($conn));
    }
    if(!mysqli_commit($conn)){
        print("Transaction Failed");
        exit();
    }
    $query = "UPDATE `playdateads` SET `status` = 'Closed' WHERE `ID` = $HOST_AD ";
    if (!mysqli_query($conn,$query)) {
        printf("Error message: %s\n", mysqli_error($conn));
    }
    if(!mysqli_commit($conn)){
        print("Transaction Failed");
        exit();
    }
    header("Location: ../playdatedate.php");
?>