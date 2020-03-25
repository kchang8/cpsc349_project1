<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            include 'scripts/redirect_to_login.php';
            include 'scripts/getOwner.php';
            redirect_to_login();
        ?>
        <meta charset="utf-8">
        <title>Profile</title>
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
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
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
                    <?php
                         $row = getOwner();
                    ?>
                    <form id = "owner-info" name = "owner-info" data-owner-signup="form" method="POST" action="scripts/update_Owner.php" enctype="multipart/form-data">
                        <div class="box text-center">
                            <input type="file" name = "ownerpicture" id="ownerpicture" style="display:none"/> 
                            <img id = "owner-picture"<?php
                                if(isset($row->image)){
                                    echo 'src="data:image/jpeg;base64,'. base64_encode($row->image).'"';
                                }
                                else{
                                    echo 'src="imgs/placeholderImage.jpg"';
                                }
                            ?>
                             class="rounded-circle" alt="placeholder image">
                        </div>
 

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="fnameInput">First name:</label>
                                <input class=" owner-input form-control" type="text" name="firstName" id="fnameInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->fname\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"First Name\"";
                                    }           
                                ?>       
                                readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="lnameInput">Last name:</label>
                                <input class=" owner-input form-control" name="lastName" id="lnameInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->lname\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"last Name\"";
                                    }
                                    
                                ?>   readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="genderInput">Gender:</label>
                                <select class="owner-input-drop form-control" id="genderInput" name="gender" disabled>
                                    <option value="">Select</option>
                                    <option value="F"                                     
                                    <?php if(isset($row->gender) && $row->gender == "F"){
                                        $x = "selected='selected'";echo $x;}
                                    ?>
                                    >F</option>
                                    <option value="M"
                                    <?php
                                        if(isset($row->gender) && $row->gender == "M"){
                                        $x = "selected='selected'";echo $x;}
                                    ?>>M</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="cityInput">City:</label>
                                <input class="owner-input form-control" name="city" id="cityInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->city\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"city\"";
                                    }
                                    
                                ?>   readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="stateInput">State:</label>
                                <input class="owner-input form-control" name="state" id="stateInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->state\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"First Name\"";
                                    }
                                    
                                ?>   readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="ageInput">Age:</label>
                                <input class="owner-input form-control" name="age" id="ageInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->age\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"age\"";
                                    }
                                    
                                ?>   readonly>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-6">
                                <label for="emailInput">Email:</label>
                                <input class="owner-input form-control" type="email" name="emailAddress" id="emailInput"
                                <?php
                                    if(isset($row->fname)){
                                        $x = "value = \"$row->email\"";
                                        echo $x;
                                    }
                                    else{
                                        echo "value = \"email\"";
                                    }
                                    
                                ?>   value="" readonly>
                            </div>
                        </div>

                        <div class="form-group pt-3 form-font">
                            <label for="aboutInput">About me, the owner:</label>
                            <textarea class="owner-input form-control" name="aboutMe" id="aboutInput" rows="3" readonly><?php
                                if(isset($row->bio)){
                                $x = $row->bio;
                                echo $x;
                                }
                                else{
                                echo "Hello";
                                }  
                            ?></textarea>
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
                            <input type="file" id="petupload" style="display:none"/> 
                            <img id="pet-picture" src="imgs/placeholderImage.jpg" class="rounded-circle" alt="placeholder image">
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <input class="pet-input form-control" name="petID" id="pNameInput" readonly="readonly" style="display:none">
                            <div class="col-md-7">
                                <label for="pNameInput">Pet's name:</label>
                                <input class="pet-input form-control" name="petName" id="pNameInput" readonly="readonly">
                            </div>

                            <div class="col-md-3">
                                <label for="genderInput">Gender:</label>
                                <input class=" pet-input form-control" id="genderInput" name="gender" readonly="readonly">
                            </div>

                            <div class="col-md-2">
                                <label for="pAgeInput">Age:</label>
                                <input class="pet-input form-control" name="petAge" id="pAgeInput" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-6">
                                <label for="animalInput">What animal is your pet?</label>
                                <input class="pet-input form-control" name="animal" id="animalInput" readonly="readonly">
                            </div>

                            <div class="col-md-6">
                                <label for="breedInput">What breed is your pet?</label>
                                <input class="pet-input form-control" name="breed" id="breedInput" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group pt-3 form-font">
                            <label for="aboutPetInput">About me, the pet:</label>
                            <textarea class="pet-input form-control" name="aboutPet" id="aboutPetInput" rows="3" readonly="true"></textarea>
                        </div>

                        <!--row of buttons with edit profile and edit pet buttons-->
                        <div class="row justify-content-around">
                            <button id ="edit-profile" name ="edit-profile" type="edit" class="butn btn-default">Edit Profile</button>
                            <button id ="edit-pet" type="edit" class="butn btn-default">Edit Pet</button>
                        </div>

                        <!--row of only the delete button-->
                        <div class="row justify-content-center">
                            <button id ="delete-button" type="delete" class="butn btn-default justify-content-center">Delete Account</button>
                        </div>

                        <!--modal popup for delete button-->
                        <div id="deleteButton" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Confirmation</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete your account?</p>
                                        <p class="text-secondary"><small>If you delete your account, all your information will be lost.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button id = "confirm-delete" type="button" class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="scripts/editprofile.js" charset="utf-8"></script>
    </body>

</html>
