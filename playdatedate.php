<?php
  session_start();
  include 'scripts/petscripts.php';
  include 'scripts/Database_constants.php';
  include 'scripts/redirect_to_login.php';
  include 'scripts/getOwner.php';

  $conn = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);
  $ID = $_SESSION["ID"];
  $query = "SELECT * FROM `playdates` WHERE OwnerID_creator = $ID";
  $result = mysqli_num_rows(mysqli_query($conn, $query));
  
  redirect_to_login();
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

    <?php
          $row = getOwner(); // should have owner
          if (getPet() != null ){
            $row2 = getPet();
          } // owner pet
          $pending = getPendingPlaydates($_SESSION["ID"]);
          $confirmed = getConfirmedPlaydates($_SESSION["ID"]);
          $received = getReceivedPlaydates($_SESSION["ID"]);
    ?>

  <section>
    <p><b>Your Name: <?php echo $row->fname; ?> </b></p>
    <p><b> Pet Name: <?php  if (getPet()!= null)echo $row2->Name ;?></b></p>
  </section>
  <section >
  <p align = "center">
  <b>Confirmed</b>
  </p>
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



      <?php 
        while ($row = mysqli_fetch_assoc($confirmed)) {
          if($row['OwnerID_creator']==$_SESSION["ID"]){
            $otherpartyOwn = $row['OwnerID_responder'];
            $otherpartyPet = $row['PetID_responder'];
          }
          else{
            $otherpartyOwn = $row['OwnerID_creator'];
            $otherpartyPet = $row['PetID_creator'];
          }
          $owner = getOwnerID($otherpartyOwn);
          $pet = getPetID($otherpartyPet);
      ?>
      <tr ConPlaydate-row-role = "trigger" <?php
          echo "other-party-owner = '$otherpartyOwn' other-party-pet = '$otherpartyPet'";
          $date = date_create($row['Time']);
          $x =date_format($date,'Y-m-d\TH:i');
          echo  "other-party-time='$x'";
          $y=$row['adID'];
          echo "ad-id = '$y'";
        ?>>
        <td>
          <?php echo $pet->Name;?>
        </td>
        <td>
          <?php echo $owner->fname ;?>
        </td>
        <td>
          <?php
                    $date = date_create($row['Time']);
                    $x =date_format($date, 'm-d-Y H:i');
                    echo $x
            ?>
        <td>
          <?php echo $pet->Species ;?>
        </td>
        <td>
        <img id = "pet-picture"<?php
                                if(isset($pet->image)){
                                    echo 'src="data:image/jpeg;base64,'. base64_encode($pet->image).'"';
                                }
                                else{
                                    echo 'src="imgs/placeholderImage.jpg"';
                                }
                            ?>
                             class="rounded-circle" alt="placeholder image">
        </td>
      </tr>
      <?php
        }
      ?>

    </table>
  </section>
  <section >
  <p align = "center">
  <b>Received</b>
  </p>
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

      <?php 
        while ($row = mysqli_fetch_assoc($received)) {
          if($row['OwnerID_creator']==$_SESSION["ID"]){
            $otherpartyOwn = $row['OwnerID_responder'];
            $otherpartyPet = $row['PetID_responder'];
          }
          else{
            $otherpartyOwn = $row['OwnerID_creator'];
            $otherpartyPet = $row['PetID_creator'];
          }
          $owner = getOwnerID($otherpartyOwn);
          $pet = getPetID($otherpartyPet);
      ?>
      <tr PendPlaydate-row-role = "trigger" <?php
          echo "other-party-owner = '$otherpartyOwn' other-party-pet = '$otherpartyPet'";
          $date = date_create($row['Time']);
          $x =date_format($date, 'Y-m-d\TH:i');
          echo  "other-party-time = '$x'";
          $y=$row['adID'];

          echo "this-ad-id = '$y'";
        ?>
      >
        <td>
          <?php echo $pet->Name;?>      
        </td>
        <td>
          <?php echo $owner->fname ;?>
        </td>
        <td>
          <?php
              $date = date_create($row['Time']);
              $x =date_format($date, 'm-d-Y H:i');
              echo  $x
          ?>
        </td>
        <td>
              <?php echo $pet->Species;?>
        </td>
        <td>
        <img id = "owner-picture"<?php
                                if(isset($pet->image)){
                                    echo 'src="data:image/jpeg;base64,'. base64_encode($pet->image).'"';
                                }
                                else{
                                    echo 'src="imgs/placeholderImage.jpg"';
                                }
                            ?>
                             class="rounded-circle" alt="placeholder image">
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
    <button id= "context-button" onClick = "location.href='petSignup.html'"  type="join" class="butn mx-auto d-block btn-default">New Playdate!</button>
  </section>
  <section >
  <p align = "center">
  <b>Pending</b>
  </p>
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



      <?php 
        while ($row = mysqli_fetch_assoc($pending)) {
          if($row['OwnerID_creator']==$_SESSION["ID"]){
            $otherpartyOwn = $row['OwnerID_responder'];
            $otherpartyPet = $row['PetID_responder'];
          }
          else{
            $otherpartyOwn = $row['OwnerID_creator'];
            $otherpartyPet = $row['PetID_creator'];
          }
          $owner = getOwnerID($otherpartyOwn);
          $pet = getPetID($otherpartyPet);
      ?>
      <tr <?php
          echo "other-party-owner = '$otherpartyOwn' other-party-pet = '$otherpartyPet'";
          $date = date_create($row['Time']);
          $x =date_format($date, 'Y-m-d\TH:i');
          echo  "other-party-time = '$x'";
        ?>>
        <td>
          <?php echo $pet->Name;?>
        </td>
        <td>
          <?php echo $owner->fname ;?>
        </td>
        <td>
          <?php
                    $date = date_create($row['Time']);
                    $x =date_format($date, 'm-d-Y H:i');
                    echo  $x
            ?>
        <td>
          <?php echo $pet->Species ;?>
        </td>
        <td>
        <img id = "pet-picture"<?php
                                if(isset($pet->image)){
                                    echo 'src="data:image/jpeg;base64,'. base64_encode($pet->image).'"';
                                }
                                else{
                                    echo 'src="imgs/placeholderImage.jpg"';
                                }
                            ?>
                             class="rounded-circle" alt="placeholder image">
        </td>
      </tr>
      <?php
        }
      ?>

    </table>
  </section>
  
  <form id = "Cancel-Date" data-owner-signup="form" method="POST" action="scripts/delete_date.php" enctype="multipart/form-data" style = "display:none">
          <input class="form-control" id="deleteAdID" name ="deleteAdID" required>
          <input class="form-control"  type="datetime-local"name="deletetime"id="deletetime">
          <input class="form-control" id="deleteOwnerID" name="deleteOwnerID" >
          <input class="form-control" id="deletePetID" name="deletePetID">
  </form>

  <form id = "Confirm-Date" data-owner-signup="form" method="POST" action="scripts/confirm_playdate.php" enctype="multipart/form-data" style = "display:none" >
          <input class="form-control" id="confirmAdID" name ="confirmAdID" required>
          <input class="form-control"  type="datetime-local" id="confirmtime"name ="confirmtime">
          <input class="form-control" id="confirmOwnerID" name="confirmOwnerID" >
          <input class="form-control" id="confirmPetID" name="confirmPetID">
  </form>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="scripts/playdate.js" charset="utf-8"></script>


</body>

</html>
