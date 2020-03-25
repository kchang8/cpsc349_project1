<?php
    session_start();
    include 'Database_constants.php';
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    else{     
            if(is_uploaded_file($_FILES["ownerpicture"]["tmp_name"])){
                $log = "<script> console.log(`File was set`) </script>";
                echo $log;
            }
            else{
                $log = "<script> console.log(`File not was set`) </script>";
                echo $log;
            }
            $file = addslashes(file_get_contents($_FILES["ownerpicture"]["tmp_name"]));

            

            $fname = $_POST['firstName'];
            $lname =  $_POST['lastName'];
            $city =  $_POST['city'];
            $state = $_POST['state'];
            $age =  $_POST['age'];
            $email = $_POST['emailAddress'];
            $gender = $_POST['gender'];
            $bio = $_POST['aboutMe'];
            $ID = $_SESSION["ID"];
            if(is_uploaded_file($_FILES["ownerpicture"]["tmp_name"])){            
                $query = "UPDATE `owners` SET `fname`= '$fname',`lname`= '$lname',";
                $query.= "`city`='$city',`state`='$state',`age`=$age,`email`='$email',";
                $query.= "`gender`='$gender', `bio` = '$bio',`image` = '$file' WHERE `ID` = $ID; ";
            }
            else{
                $log = "<script> console.log(`File was not set`) </script>";
                echo $log;
                $query = "UPDATE `owners` SET `fname`= '$fname',`lname`= '$lname',";
                $query.= "`city`='$city',`state`='$state',`age`=$age,`email`='$email',";
                $query.= "`gender`='$gender', `bio` = '$bio' WHERE `ID` = $ID; ";
                 
            }
            //debug stuff
            //$log = "<script> console.log(`$query`) </script>";
            //echo $log;
            //end debug stuff
            $result = mysqli_query($conn,$query); 
            if(!mysqli_commit($conn)){
                print("Transaction Failed");
                exit();
            }
        //$log = "<script> console.log(`$row->ID`) </script>";
        //echo $log;
        header ("Location: ../profile.php");
    }
?>