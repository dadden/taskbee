<?php
// If user is aldready logged in, redirect to profile.php
session_start();
if (isset($_SESSION["user"])) {
    header( "Location: profile.php" );
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | TaskBee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="app/resources/bootstrap.min.css">
    <link rel="stylesheet" href="app/resources/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>
    <div class="content-wrapper">
        <header class="shadow">
            <a href="index.php"><img src="img/logo.png" alt="TaskBee logo" class="logo"></a>
            <nav>
                <a href="#" id="menu-toggle">&#9776</a>
                <ul id="toggled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="frequently-asked-questions.php">FAQ</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li class="active">Login <i class="fas fa-lock"></i></a></li>
                </ul>
            </nav>
        </header>
        <main>

            <!-- Login section -->
            <div class="login">
    <form method="post" action="app/login.php" autocomplete="off">
        <p class="h4 text-center mb-4">Recover your password</p>


        <div class="md-form">
            <p>A new password will be sent to the e-mail address linked to your username.</p>
        </div>


        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="username" name="username" class="form-control" required>
            <label for="password">Your username</label>
        </div>

        <div class="text-center mt-4">
            <button class="btn-standard" type="submit" name="login">Recover</button>
            <p><a href="login.php"><strong>Back to login</strong></a></p>
        </div>
    </form>
</div>

        </main>

        <footer>
            <div class="footer-copyright py-3 text-center">
                © 2018 Copyright David Mohlén
            </div>
        </footer>
    </div>
    <!-- Bootstrap, JQuery, Popper, MD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="app/resources/mdb.min.js"></script>
</body>


</html>
