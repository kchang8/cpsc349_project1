<?php
    session_start();
    include 'Database_constants.php';
    include 'getOwner.php';
    $HOST_ID = $_POST["ownerID"];
    $HOST_PET = $_POST["petID"];
    $HOST_TIME = $_POST["time"];

    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;

    $HOST_TIME.=":00";
    $log = "<script> console.log(`$HOST_TIME`) </script>";
    echo $log;
    $ID = $_SESSION["ID"];
    $owner = getOwnerID($ID);
    $query = "INSERT INTO `playdateads` (`PetID_creator`, `OwnerID_creator`, `Time`, `State`, `City`) VALUES ($HOST_PET,$ID,'$HOST_TIME','$owner->state','$owner->city')";
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
    header("Location: ../paw.php");
?>