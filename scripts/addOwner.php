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
            $query = ""
            $row = mysqli_fetch_object($result);
            $_SESSION["ID"] = $row->ID;
            $_SESSION["err"] = 0;
            echo $row->ID;
            header ("Location: home.html");
        }
        else{
            $_SESSION["err"] = 1;
            header ("Location: login.php");
        }
    }
?>