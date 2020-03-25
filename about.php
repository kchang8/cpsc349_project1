<!DOCTYPE html>

<html>

<head>
    <title>About</title>

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

                <?php
                    if(isset($_COOKIE['pet-owner'])){
                        $_SESSION["ID"] = $_COOKIE['pet-owner'];
                ?>
                    <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="paw.php" class="nav-link">Paw Me!</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">My PlayDates</a>
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
                <?php
                    }
                    else {
                ?>
                <div class="navbar-nav text-right">
                    <a href="landing.php" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link active">About</a>
                    <a href="ownerSignup.php" class="nav-item nav-link">Join</a>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
                <?php
                    }
                ?>
        </nav>
    </nav>

    <div class="mx-auto d-block" style="width: 100%;" id="PlayDate">
      <div id="PawMeCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/beachdogs.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imgs/cats.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imgs/ducks.JPG" class="d-block w-100" alt="...">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


    </div>

    <section>
        <p><b>About: </b></p>
        <p><b> </b></p>
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
