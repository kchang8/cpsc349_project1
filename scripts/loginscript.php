<?php
    session_start();
    include 'Database_constants.php';
    if(isset($_COOKIE['pet-owner']))
    {
        echo  "<script> console.log(\"The cookie is set\") </script>";
    }
    $name = $_POST['emailAddress'];
    $pswrd = $_POST['userPassword'];
    $query = "SELECT email, password, ID FROM owners WHERE email = '$name' AND password = '$pswrd'";
    $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
    if(!$conn){
        echo "Cannon connect to MySQL. " . mysqli_connect_error();
        exit();
    }
    $result = mysqli_query($conn,$query);  
    if (!$result){
        $_SESSION["err"] = 1;
    }
    else{     

        if(mysqli_num_rows($result)==0){
            $_SESSION["err"] = 1;
            echo  "<script> console.log(\"There is no is set\") </script>";
            header ("Location: ../login.php");
        }
        else{
            $row = mysqli_fetch_object($result);
            $_SESSION["ID"] = $row->ID;
            setcookie('pet-owner', $row->ID, time()+3600, "/");
            $_SESSION["err"] = 0;
            header ("Location: ../home.php");
        }
    }
?>
