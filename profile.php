<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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
                        <a href="#" class="nav-link">Paw Me!</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">My PlayDates</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </nav>

        <section class="container">
            <header>
                <img class="main-nav-logo mx-auto d-block" src="imgs/AccountLogo.png" alt ="Account Logo">
                <h2>Your Information</h2>
            </header>
            <div class="panel panel-default">
                <div class="panel-body">
                    <!--owner form info-->
                    <form data-owner-signup="form" method="POST" action="" enctype="multipart/form-data">
                        <div class="box text-center">
                            <img src="imgs/placeholderImage.jpg" class="rounded-circle" alt="placeholder image">
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="fnameInput">First name:</label>
                                <input class="form-control" type="text" name="firstName" id="fnameInput" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="lnameInput">Last name:</label>
                                <input class="form-control" name="lastName" id="lnameInput" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="genderInput">Gender:</label>
                                <input class="form-control" id="genderInput" name="gender" readonly>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="cityInput">City:</label>
                                <input class="form-control" name="city" id="cityInput" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="stateInput">State:</label>
                                <input class="form-control" name="state" id="stateInput" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="ageInput">Age:</label>
                                <input class="form-control" name="age" id="ageInput" readonly>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-6">
                                <label for="emailInput">Email:</label>
                                <input class="form-control" type="email" name="emailAddress" id="emailInput" value="" readonly>
                            </div>
                        </div>

                        <div class="form-group pt-3 form-font">
                            <label for="aboutInput">About me, the owner:</label>
                            <textarea class="form-control" name="aboutMe" id="aboutInput" rows="3" readonly></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <!--pet form info-->
        <section class="container">
            <header>
                <h2>Your Pet's Information</h2>
            </header>
            <div class="panel panel-default">
                <div class="panel-body">
                <form id = "pet-info" data-pet-signup="form" method="POST" action="scripts/update_pet.php" enctype="multipart/form-data">
                        <div class="box text-center">
                            <img src="imgs/placeholderImage.jpg" class="rounded-circle" alt="placeholder image">
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-7">
                                <label for="pNameInput">Pet's name:</label>
                                <input class="form-control" name="petName" id="pNameInput" readonly="readonly">
                            </div>

                            <div class="col-md-3">
                                <label for="genderInput">Gender:</label>
                                <input class="form-control" id="genderInput" name="gender" readonly="readonly">
                            </div>

                            <div class="col-md-2">
                                <label for="pAgeInput">Age:</label>
                                <input class="form-control" name="petAge" id="pAgeInput" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-6">
                                <label for="animalInput">What animal is your pet?</label>
                                <input class="form-control" name="animal" id="animalInput" readonly="readonly">
                            </div>

                            <div class="col-md-6">
                                <label for="breedInput">What breed is your pet?</label>
                                <input class="form-control" name="breed" id="breedInput" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group pt-3 form-font">
                            <label for="aboutPetInput">About me, the pet:</label>
                            <textarea class="form-control" name="aboutPet" id="aboutPetInput" rows="3" readonly="true">yoyoy</textarea>
                        </div>

                        <div id="pop-up" class="modal col-12 justify-content-around align-self-center text-align-center">
                            <div Payment-message = "response"> Thanks for clicking. That felt good. </div>
                            <a href="#" rel="modal:close">Close</a>
                        </div>

                        <div class="row justify-content-around">
                            <button id = "edit-button" type="edit" class="btn btn-default">Edit Profile</button>
                            <button type="delete" class="btn btn-default">Edit Pet</button>
                        </div>

                        <div class="row justify-content-center">
                            <button id = "delete-button" type="delete" class="btn btn-default justify-content-center">Delete Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer class="page-footer font-small pt-3">
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Paw Me!</div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="scripts/editprofile.js" charset="utf-8"></script>
    </body>

</html>
