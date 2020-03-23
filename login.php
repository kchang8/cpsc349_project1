
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
                    <a href="#" class="nav-item nav-link e">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Join</a>
                    <a href="#" class="nav-item nav-link active">Login</a>
                </div>
            </nav>
        </nav>
        <section class="container">
            <header>
                <img class="main-nav-logo mx-auto d-block" src="imgs/PawMeLogo.png" alt ="Paw Me!">
                <h2>Enter your account information</h2>
            </header>
            <div class="panel panel-default">
                <div class="panel-body" >
                    <form data-login="form" method="post" action ="scripts/loginscript.php" enctype="multipart/form-data">
                        <div class="form-group pt-5 form-font">
                            <label for="emailInput">Email:</label>
                            <input class="form-control" type="email" name="emailAddress" id="emailInput" value="" placeHolder="Email" autofocus required>
                        </div>
                        <div class="form-group pt-5 form-font">
                            <label for="passwordInput">Password:</label>
                            <input class="form-control" type="password" name="userPassword" id="passwordInput" value="" placeHolder="Password" required>
                        </div>
                        <div class="form-font">
                            <p>Don't have an account? Sign up <a href="ownerSignup.php">here</a></p>
                        </div>
                        <?php
                            session_start();
                            if(isset($_SESSION["err"]) && $_SESSION["err"]==1){
                        ?>
                             <p>Invalid password or email</p>
                        <?php
                            }
                        ?>
                        <button type="signIn" class="btn mx-auto d-block btn-default">Sign In</button>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>