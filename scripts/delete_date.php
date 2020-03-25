<?php
    session_start();
    include 'Database_constants.php';
    include 'getOwner.php';
    $HOST_ID = $_POST["deleteOwnerID"];
    $HOST_PET = $_POST["deletePetID"];
    $HOST_TIME = $_POST["deletetime"];
    $HOST_AD = $_POST["deleteAdID"];

    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;

    $HOST_TIME.=":00";
    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;
    $ID = $_SESSION["ID"];
    $pet = getPetByOwner($ID);
    $query = "DELETE FROM `playdates` WHERE `adID`= $HOST_AD";
    $log = "<script> console.log(`$query`) </script>";
    echo $log;
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
    $query = "UPDATE `playdateads` SET `status` = 'Open' WHERE `ID` = $HOST_AD ";
    if (!mysqli_query($conn,$query)) {
        printf("Error message: %s\n", mysqli_error($conn));
    }
    if(!mysqli_commit($conn)){
        print("Transaction Failed");
        exit();
    }
    header("Location: ../playdatedate.php");
?>