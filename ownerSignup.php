<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Owner Sign Up</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href= "stylesheets/styles.css">
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
                <div class="navbar-nav text-right">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Join</a>
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </nav>
        </nav>
        
        <section class="container">
            <header>
                <img class="login-nav-logo mx-auto d-block" src="imgs/PawMeLogo.png" alt ="Paw Me!">
                <h2>Welcome!</h2>
                <h4>Please enter the following information</h4>
            </header>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form data-owner-signup="form" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="fnameInput">First name:</label>
                                <input class="form-control" name="firstName" id="fnameInput" autofocus required>
                            </div>

                            <div class="col-md-4">
                                <label for="lnameInput">Last name:</label>
                                <input class="form-control" name="lastName" id="lnameInput" required>
                            </div>

                            <div class="col-md-4">
                                <label for="genderInput">Gender:</label>
                                <select class="form-control" id="genderInput" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="female">F</option>
                                    <option value="male">M</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-4">
                                <label for="cityInput">City:</label>
                                <input class="form-control" name="city" id="cityInput" required>
                            </div>

                            <div class="col-md-4">
                                <label for="stateInput">State:</label>
                                <input class="form-control" name="state" id="stateInput" placeHolder="CA" required>
                            </div>

                            <div class="col-md-4">
                                <label for="ageInput">Age:</label>
                                <input class="form-control" name="age" id="ageInput" placeHolder="18" required>
                            </div>
                        </div>

                        <div class="form-group row pt-3 form-font">
                            <div class="col-md-6">
                                <label for="emailInput">Email:</label>
                                <input class="form-control" type="email" name="emailAddress" id="emailInput" value="" placeHolder="Email" required>
                            </div>
                           
                            <div class="col-md-6">
                                <label for="passwordInput">Password:</label>
                                <small class="text-muted">(Must be at least 6 characters)</small>
                                <input class="form-control" type="password" name="userPassword" id="passwordInput" value="" placeHolder="Password" required>
                            </div>
                        </div>

                        <div class="form-group pt-3 form-font">
                            <label for="aboutInput">About me, the owner:</label>
                            <textarea class="form-control" name="aboutMe" id="aboutInput" rows="3"></textarea>
                        </div>

                        <button type="signIn" class="btn mx-auto d-block btn-default">Sign Up</button>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    </body>
    
</html>