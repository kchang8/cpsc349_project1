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
        $query = "SELECT email, password, ID FROM owners WHERE email = '$email'";
        $result = mysqli_query($conn,$query); 
        //If a row exists where that email is registered, then there is an owner
        //with that email already
        if(mysqli_num_rows($result)!=0){
            $_SESSION["err"] = 1;
            header ("Location: ../ownerSignup.php");
        }
        $query = "INSERT INTO `owners` (`fname`,`lname`,`city`,`state`,`age`,`email`,`password`,`gender`) ";
        $query.= "VALUES ('$fname','$lname','$city','$state',$age,'$email','$pass','$gender');";
        //debug stuff
        $log = "<script> console.log(`$query`) </script>";
        echo $log;
        //end debug stuff
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
?>