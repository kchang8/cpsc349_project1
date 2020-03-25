<?php
    session_start();
    include 'Database_constants.php';
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    else{   
        $PetID = $_POST['petID'];
        $name = $_POST['petName'];
        $breed =  $_POST['breed'];
        $animal = $_POST['animal'];
        $age =  $_POST['petAge'];
        $gender = $_POST['gender'];
        $bio = $_POST['aboutPet'];
        $ID = $_SESSION["ID"];
        $query = "SELECT `ID` FROM `pets` WHERE `ID` = $PetID AND `OwnerID` = $ID";
        $result = mysqli_query($conn,$query); 
        if(is_uploaded_file($_FILES["petpicture"]["tmp_name"])){
            $file = addslashes(file_get_contents($_FILES["petpicture"]["tmp_name"]));
            if(mysqli_num_rows($result)!=0){
                $query = "UPDATE `pets` SET `Name`= '$name',`Species`= '$animal',";
                $query.= "`breed`='$breed',`Age`= age, ";
                $query.= "`gender`='$gender', `Bio` = '$bio',`image` = '$file' WHERE `OwnerID` = $ID AND `ID` = $PetID; ";
            }
            else{
                $query = "INSERT INTO `pets` (`OwnerID`,`Name`,`Species`,`breed`,`age`,`gender`, `bio`,`image`) ";
                $query.= "VALUES ('$ID','$name','$animal','$breed',$age,'$gender','$bio','$file');";
            }
        }
        else{
            if(mysqli_num_rows($result) !=0 ){
                $query = "UPDATE `pets` SET `Name`= '$name',`Species`= '$animal',";
                $query.= "`breed`='$breed',`Age`= age, ";
                $query.= "`gender`='$gender', `Bio` = '$bio' WHERE `OwnerID` = $ID AND `ID` = $PetID; ";   
            }    
            else{
                $query = "INSERT INTO `pets` (`OwnerID`,`Name`,`Species`,`breed`,`age`,`gender`, `bio`) ";
                $query.= "VALUES ('$ID','$name','$animal','$breed',$age,'$gender','$bio');";
            }
        }
        $result = mysqli_query($conn,$query); 
        if(!mysqli_commit($conn)){
            print("Transaction Failed");
            exit();
        }
        header ("Location: ../profile.php");
    }
?>