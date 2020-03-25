<!DOCTYPE html>

<html>

<head>
    <title>About</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="home-nav">
        <a href="#" class="navbar-brand">
            <img href="landing.php" class="Home-nav-logo" src="imgs/PawMeLogo.png" alt="Paw Me Logo">
        </a>
        <nav class="collapse navbar-collapse ml-auto" id="navbarCollapse">
                <?php
                    if(isset($_COOKIE['pet-owner'])){
                        $_SESSION["ID"] = $_COOKIE['pet-owner'];
                ?>
                    <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="landing.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="paw.php" class="nav-link">Paw Me!</a>
                    </li>
                    <li class="nav-item">
                        <a href="playdatedate" class="nav-link">My PlayDates</a>
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

    <div class="bannerContainer">
      <div class="row">
        <div class="banner">
          <img src="imgs/petBanner.jpg" alt="about banner" class="img-fluid">
          <h2 class="heading">About Paw Me</h2>
        </div>
      </div>
    </div>

    <section class="container">
      <h4 style="line-height: 1.8; margin-top: 50px; margin-bottom: 50px;">
        Paw me is a new way for you and your pets to meet new friends. There's 
        no limit as to what type of animals your pets are to plan playdates. They can be 
        furry animals to even scaly reptiles. Paw me keeps track of your scheduled play dates and allows
        you to discover other people's profiles for you to select who you want to schedule
        your playdates with.
      </h4>
      
      <h4 style="line-height: 1.8; margin-top: 50px; margin-bottom: 50px;">
        Whether you are searching for new paw pals to plan pet parties or seeking business companions to grow 
        your network, Paw Me allows you to discover pets and owners who share similar interests. One simple Paw 
        Me can be the start of something new.
      </h4>

      <div id="PawMeCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#PawMeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#PawMeCarousel" data-slide-to="1"></li>
            <li data-target="#PawMeCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/beachdogs.png" class="d-block w-100" alt="dog slide">
            </div>
            <div class="carousel-item">
              <img src="imgs/cats.png" class="d-block w-100" alt="cat slide">
            </div>
            <div class="carousel-item">
              <img src="imgs/ducks.png" class="d-block w-100" alt="duck slide">
            </div>
          </div>

          <a class="carousel-control-prev" href="#PawMeCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#PawMeCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>
    </section>

    <footer class="page-footer font-small pt-3">
      <div class="footer-copyright text-center py-3">© 2020 Copyright: Paw Me!</div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>
