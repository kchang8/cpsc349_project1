<?php
    session_start();
    $name = $_POST['emailAddress'];
    $query = "SELECT email, password, ID FROM owners WHERE email = '$name'";
    $conn = mysqli_connect("localhost","San","1234", "petdatabase");
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    $result = mysqli_query($conn,$query);  
    if (!$result){
        $_SESSION["err"] = 1;
    }
    else{     
        if(mysqli_num_rows($result)==0){ // If the number of rows return is 0 then that means that there is no username 
            $query = "INSERT INTO `owners` (`fname`,`lname`,`city`,`state`,`age`,`email`,`password`,`gender`) ";
            $fname = $_POST['firstName'];
            $lname =  $_POST['lastName'];
            $city =  $_POST['city'];
            $state = $_POST['state'];
            $age =  $_POST['age'];
            $email = $_POST['emailAddress'];
            $pass = $_POST['userPassword'];
            $gender = $_POST['gender'];
            $query = "SELECT email, password, ID FROM owners WHERE email = '$email' AND password = '$pass'";
            $result = mysqli_query($conn,$query); 
            if(mysqli_num_rows($result)==0){
                $_SESSION["err"] = 1;
                header ("Location: ../ownerSignup.php");
            }
            $query.= "VALUES ('$fname','$lname','$city','$state',$age,'$email','$pass','$gender');";
            echo $query;
            $result = mysqli_query($conn,$query); 
            if(!mysqli_commit($conn)){
                print("Transaction Failed");
                exit();
            }
            $query = "SELECT email, password, ID FROM owners WHERE email = '$email' AND password = '$pass'";
            $result = mysqli_query($conn,$query); 
            $row = mysqli_fetch_object($result);
            $_SESSION["ID"] = $row->ID;
            $_SESSION["err"] = 0;
            $log = "<script> console.log(`$row->ID`) </script>";
            echo $log;
            header ("Location: ../home.html");
        }
        else{
            $_SESSION["err"] = 1;
            header ("Location: ../ownerSignup.php");
        }
    }
?>