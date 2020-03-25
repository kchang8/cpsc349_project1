<?php
  session_start();
  include 'scripts/petscripts.php';
  include 'scripts/Database_constants.php';
  include 'scripts/redirect_to_login.php';
  include 'scripts/getOwner.php';
  redirect_to_login();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paw Me!</title>
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href= "stylesheets/styles.css">
    </head>
    <body class="img-fluid">
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
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Paw Me!</a>
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

        <section class="container">
            <header>
                <img class="main-nav-logo mx-auto d-block" src="imgs/PawMeLogo.png" alt ="Paw Me Logo">
            </header>

            <h2>Discover other pets!</h2>


            <?php $row = getOwner(); // should have owner
                  $row3 = getRandomOwner(); // playdate
                  $row2 = getPet2($row3->ID); // owner pet
            ?>


            <div class="card-deck">
                <div class="card">
                    <div class="card-header">Owner Info</div>
                     <!--want to change the values here with db values-->
                    <img id = "owner-picture"<?php
                                            if(isset($row3->image)){
                                                echo 'src="data:image/jpeg;base64,'. base64_encode($row3->image).'"';
                                            }
                                            else{
                                                echo 'src="imgs/placeholderImage.jpg"';
                                            }
                                        ?>
                    class="card-img-top" alt="owner photo">
                    <div class="card-body">



                        <h3 class="card-title"> <?php echo $row3->fname; ?> </h3>

                        <ul class="card-text">
                            <li><b>Age:</b> <?php echo $row3->age; ?></li>
                            <li><b>Gender:</b> <?php echo $row3->gender; ?></li>
                            <li><b>Location:</b></li>
                                <ul>
                                    <li><b>City:</b> <?php echo $row3->city; ?></li>
                                    <li><b>State:</b> <?php echo $row3->state; ?></li>
                                </ul>

                            <li><p><b>About me:</b> <?php echo $row3->bio; ?></p></li>

                        </ul>
                    </div>
                </div>

                <div class="card">
                <div class="card-header">Pet Info</div>
                     <!--want to change the values here with db values-->
                     <img id = "owner-picture"<?php
                                             if(isset($row2->image)){
                                                 echo 'src="data:image/jpeg;base64,'. base64_encode($row2->image).'"';
                                             }
                                             else{
                                                 echo 'src="imgs/placeholderImage.jpg"';
                                             }
                                         ?>
                     class="card-img-top" alt="pet photo">
                    <div class="card-body">

                        <h3 class="card-title"><?php echo $row2->Name; ?></h3>
                        <ul class="card-text">
                            <li><b>Age:</b><?php echo $row2->Age; ?></li>
                            <li><b>Pet attributes:</b></li>
                                <ul>
                                    <li><b>Animal/Species:</b> <?php echo $row2->Species; ?></li>
                                    <li><b>Breed:</b> <?php echo $row2->Breed; ?></li>
                                </ul>
                            <li><p><b>About me:</b> <?php echo $row2->Bio; ?></p></li>

                        </ul>
                    </div>
                </div>
            </div>

            <form id = "pawon" data-owner-signup="form" method="POST" action="scripts/addplaydate.php" enctype="multipart/form-data" style="display:none">
                    <input class="form-control" name="time"  required>
                    <input class="form-control" name="adOwnerID" <?php echo "value = $row3->ID";?> required>
                    <input class="form-control" name="adPetID"  <?php echo "value = $row2->ID";?> required>
            </form>

            <div class="row justify-content-around">
                <input class="pawButtons" type="image" onClick="history.go(0)" src="imgs/PawsOff.png" name="pawsoff" id="pawsoffButton" />
                <input class="pawButtons" type="image" onClick="pawMe($row, $row2, $row3)" src="imgs/PawMe.png" name="pawme" id="pawmeButton" data-target="#modal" data-toggle="modal"/>


            </div>


        </section>

        <footer class="page-footer font-small pt-3">
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Paw Me!</div>
        </footer>

    <script src="js/datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
