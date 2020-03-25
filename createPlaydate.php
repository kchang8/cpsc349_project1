<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Playdate</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="home-nav">
        <a href="#" class="navbar-brand">
            <img class="Home-nav-logo" src="imgs/PawMeLogo.png" alt="Paw Me Logo">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse ml-auto" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="landing.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="paw.php" class="nav-link">Paw Me!</a>
                </li>
                <li class="nav-item">
                    <a href="playdatedate.php" class="nav-link active">My PlayDates</a>
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
            <img class="main-nav-logo mx-auto d-block" src="imgs/PawMeLogo.png" alt="Paw Me!">
            <h2>Create a playdate!</h2>
        </header>
        <div class="panel panel-default">
            <div class="panel-body">
                <form data-pet-signup="form" method="POST" action="addpet.php" enctype="multipart/form-data">
                    <div class="form-group row pt-3 form-font">
                        <div class="col-md-6">
                            <label for="pNameInput">Pet's name:</label>
                            <input class="form-control" name="petName" id="pNameInput" autofocus required>
                        </div>

                        <div class="col-md-6">
                            <label for="ownerNameInput">Pet Owner name:</label>
                            <input class="form-control" name="ownerName" id="ownerNameInput" autofocus required>
                        </div>
                    </div>

                    <div class="form-group row pt-3 form-font">
                        <div class="col-md-6">
                            <label for="timeInput">Set time for playdate:</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input class="form-control"  type="datetime-local" name="time" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="animalInput">What animal is your pet?</label>
                            <input class="form-control" name="animal" id="animalInput" placeHolder="Dog" required>
                        </div>
                    </div>

                    <div class="form-group pt-3 form-font">
                        <label for="petPhoto">Upload a picture of your pet:</label>
                        <input type="file" name="petPhoto" id="image" />
                    </div>

                    <button type="createPlaydate" class="butn mx-auto d-block btn-default">Create Playdate</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javacript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>