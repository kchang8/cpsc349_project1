<?php
    session_start();
    include 'Database_constants.php';
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    else{     
        $fname = $_POST['firstName'];
        $lname =  $_POST['lastName'];
        $city =  $_POST['city'];
        $state = $_POST['state'];
        $age =  $_POST['age'];
        $email = $_POST['emailAddress'];
        $pass = $_POST['userPassword'];
        $gender = $_POST['gender'];
        $bio = $_POST['aboutMe'];
        $file = addslashes(file_get_contents($_FILES["ownerpicture"]["tmp_name"]));

        $query = "SELECT email, password, ID FROM owners WHERE email = '$email'";
        $result = mysqli_query($conn,$query); 
        $x = mysqli_num_rows($result);
        $log = "<script> console.log('$x')</script>";
        echo $log;
        if(mysqli_num_rows($result)!=0){
            $_SESSION["err"] = 1;
            header ("Location: ../ownerSignup.php");
        }
        else{
            if(is_uploaded_file($_FILES["ownerpicture"]["tmp_name"])){
                $query = "INSERT INTO `owners` (`fname`,`lname`,`city`,`state`,`age`,`email`,`password`,`gender`,`bio`, `image`) ";
                $query.= "VALUES ('$fname','$lname','$city','$state',$age,'$email','$pass','$gender','$bio','$file');";
            }
            else{
                $query = "INSERT INTO `owners` (`fname`,`lname`,`city`,`state`,`age`,`email`,`password`,`gender`,`bio`) ";
                $query.= "VALUES ('$fname','$lname','$city','$state',$age,'$email','$pass','$gender','$bio');";
            }
            $result = mysqli_query($conn,$query); 
            if(!mysqli_commit($conn)){
                print("Transaction Failed");
                exit();
            }
            $query = "SELECT email, password, ID FROM owners WHERE email = '$email' AND password = '$pass'";
            $result = mysqli_query($conn,$query); 
            $row = mysqli_fetch_object($result);
            $_SESSION["ID"] = $row->ID;
            setcookie('pet-owner', $row->ID, time()+3600, "/");
            $_SESSION["err"] = 0;
            $log = "<script> console.log(`$row->ID`) </script>";
            echo $log;
            header ("Location: ../home.php");
        }
    }
?>