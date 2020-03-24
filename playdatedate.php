<?php 
include_once('petscripts.php');
$query="select * from playdates";
$result=mysql_query()
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
      <img class="Home-nav-logo" src="imgs/PawMeLogo.png" alt="Paw Me Logo">
    </a>
    <nav class="collapse navbar-collapse ml-auto" id="navbarCollapse">
      <div class="navbar-nav text-right">
        <a href="home.html" class="nav-item nav-link">Home</a>
        <a href="#" class="nav-item nav-link">About</a>
        <a href="#" class="nav-item nav-link active">My PlayDates</a>
        <a href="#" class="nav-item nav-link">Account</a>
      </div>
    </nav>
  </nav>

  <div class="mx-auto d-block" style="width: 500px;" id="PlayDate">
    <div class="row">
      <img class="mx-auto d-block img-fluid" src="imgs/MyPlayDates.png" alt="">
    </div>


  </div>

  <section>
    <p><b>Your Name: </b></p>
    <p><b> Pet Name: </b></p>
  </section>
  <section>
    <table class="table table-light table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name of Paw Pal</th>
          <th scope="col">Paw Pal Owner</th>
          <th scope="col">Date for the Play Date</th>
          <th scope="col">Animal Type</th>
        </tr>
      </thead>
      <?php
      // placeholder values for the IDs
        while ($rows=mysql_fetch_assoc($result))
        {
            ?>
            <tr>
                <td>
                    <?php echo $rows['PetID_responder']; ?>
                </td>
                <td>
                    <?php echo $rows['OwnerID_creator']; ?>
                </td>
                <td>
                    <?php echo $rows['Time']; ?>
                </td>
                <td>
                    <?php echo $rows['PetID_responder_Species']; ?>
                </td>
            </tr>
    <?php
        }
    ?>
      <!-- <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody> -->
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