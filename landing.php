<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body class="img-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="home-nav">
        <a href="#" class="navbar-brand">
            <img class="Home-nav-logo" src="imgs/PawMeLogo.png" alt="Paw Me Logo">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse ml-auto" id="navbarCollapse">
            <div class="navbar-nav text-right">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="ownerSignup.php" class="nav-item nav-link">Join</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
            </div>
        </nav>
    </nav>

    <div class="container" id="home-content">
        <div class="row">
            <img class="mx-auto d-block img-fluid" src="imgs/PawMeLogo.png" alt="Paw Me!">
        </div>
        <div class="row">
            <h5 class="text-nowrap mx-auto d-block">A new way to play</h5>
        </div>
        
        <div class="row">
            <button onClick="location.href='ownerSignup.php'" type="join" class="butn mx-auto d-block btn-default">Join Today!</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>