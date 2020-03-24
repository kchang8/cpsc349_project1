<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paw Me!</title>
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
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Paw Me!</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">My PlayDates</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu">
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

            <div class="card-deck">
                <div class="card">
                    <div class="card-header">Owner Info</div>
                     <!--want to change the values here with db values-->
                    <img src="imgs/human1.jpg" class="card-img-top" alt="owner photo">
                    <div class="card-body">
                        <h3 class="card-title">Owner name</h3>
                        <ul class="card-text">
                            <li><b>Age:</b> 18</li>
                            <li><b>Gender:</b> Female</li>
                            <li><b>Location:</b></li>
                                <ul>
                                    <li><b>City:</b> Los Angeles</li>
                                    <li><b>State:</b> CA</li>
                                </ul>
                            <li><p><b>About me:</b> Some example text in the about me text area</p></li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                <div class="card-header">Pet Info</div>
                     <!--want to change the values here with db values-->
                    <img src="imgs/pet1.png" class="card-img-top" alt="pet photo">
                    <div class="card-body">
                        <h3 class="card-title">Pet name</h3>
                        <ul class="card-text">
                            <li><b>Age:</b> 3</li>
                            <li><b>Gender:</b> Female</li>
                            <li><b>Pet attributes:</b></li>
                                <ul>
                                    <li><b>Animal/Species:</b> Dog</li>
                                    <li><b>Breed:</b> Shiba Inu</li>
                                </ul>
                            <li><p><b>About me:</b> Some example text in the about me pet text area</p></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around">
                <input class="pawButtons" type="image" src="imgs/PawsOff.png" name="pawsoff" id="pawsoffButton" />
                <input class="pawButtons" type="image" src="imgs/PawMe.png" name="pawme" id="pawmeButton" />
            </div>
           
        </section>

        <footer class="page-footer font-small pt-3">
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Paw Me!</div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>