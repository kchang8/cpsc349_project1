<?php 
  session_start();
  include 'scripts/petscripts.php';
  include 'scripts/Database_constants.php';
  include 'scripts/redirect_to_login.php';
  include 'scripts/getOwner.php';

  redirect_to_login();

  $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
  $ID = $_SESSION["ID"];
  $query = "SELECT * FROM `playdates` WHERE OwnerID = $ID";    
  $result = mysqli_query($conn,$query); 
  if($result == FALSE){
    $_SESSION["err"] = 1;
    header ("Location: ../home.php");
    
  }
 
?>

<!DOCTYPE html>

<html>

<head>
  <title>Playdate Tracker</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="home-nav">
            <a href="#" class="navbar-brand">
                <img class="Home-nav-logo" src="imgs/PawMeLogo.png" alt="Paw Me Logo" >
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse ml-auto" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="paw.php" class="nav-link">Paw Me!</a>
                    </li>
                    <li class="nav-item">
                        <a href="playdatedate.php" class="nav-link">My PlayDates</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="scripts/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </nav>

  <div class="mx-auto d-block" style="width: 500px;" id="PlayDate">
    <div class="row">
      <img class="mx-auto d-block img-fluid" src="imgs/MyPlayDates.png" alt="">
    </div>


  </div>
    <?php $row = getOwner(); // should have owner
          $row2 = getPet(); // owner pet
          $row3 = getPlaydate(); // playdate
          $row4 = getOwner2($row3->OwnerID_responder); // responder owner
          $row5 = getPet2($row3->PetID_responder); // responder pet
    ?>

  <section>
    <p><b>Your Name: <?php echo $row->fname ?> </b></p>
    <p><b> Pet Name: <?php echo $row2->Name ?></b></p>
  </section>

  <section>
    <table class="table table-light table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name of Paw Pal</th>
          <th scope="col">Paw Pal Owner</th>
          <th scope="col">Date for the Play Date</th>
          <th scope="col">Animal Type</th>
          <th scope = "col">Picture</th>
        </tr>
      </thead>

      
    
           
      <tr>
        <td>
          <?php echo $row5->Name ?>
        </td>
        <td>
          <?php echo $row4->fname; ?>
        </td>
        <td>
          <?php echo $row3->Time; ?>
        </td>
        <td>
          <?php echo $row5->Species ?>
        </td>
        <td>
        <img id = "owner-picture"<?php
                                if(isset($row2->image)){
                                    echo 'src="data:image/jpeg;base64,'. base64_encode($row2->image).'"';
                                }
                                else{
                                    echo 'src="imgs/placeholderImage.jpg"';
                                }
                            ?>
                             class="rounded-circle" alt="placeholder image">
        </td>
      </tr>
      <?php
        
    ?>
    </table>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


</body>

</html>
