<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | TaskBee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/png" href="img/favicon.png">
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
                    <li class="active">Home</li>
                    <li><a href="frequently-asked-questions.php">FAQ</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <?php
                    if (isset($_SESSION["user"])){
                        echo "<li><a href=\"profile.php\">Profile <i class=\"fas fa-angle-right\"></i></a></li>";
                        echo "<li><a href=\"index.php?logout=1\">Logout <i class=\"fas fa-sign-out-alt\"></i></a></li>";
                    } else {
                        echo "<li><a href=\"login.php\">Login <i class=\"fas fa-lock\"></i></a></li>";
                    }

                    ?>
                </ul>
            </nav>
        </header>
        <main>
            <!-- Banner -->
            <div class="banner">
                <div class="banner-text">
                    <h1>Your #1 source for creative inspiration</h1>
                    <h5>Revolutionary? Maybe not, but you are sure to enjoy you stay. Don't have the budget<br> to create your own portfolio or do you simply want to expand your digital footprint?<br></h5>
                    <button type="button" class="btn-banner shadow"><a href="#signup">Sign up today!</a></button>
                </div>
            </div>

            <!-- Three columns displaying website features -->
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fas fa-share-alt fa-5x"></i>
                        <h3>Sharing is caring</h3>
                        <p>Maybe you struck lightning with your new creation, so why not share it with others? You are still the rightful owner of your own work.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="far fa-lightbulb fa-5x"></i>
                        <h3>Find inspiration</h3>
                        <p>Maybe you struck lightning with your new creation, so why not share it with others? You are still the rightful owner of your own work.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-cloud-download-alt fa-5x"></i>
                        <h3>Gather resources</h3>
                        <p>Maybe you struck lightning with your new creation, so why not share it with others? You are still the rightful owner of your own work.</p>
                    </div>
                </div>
            </div>

            <!-- Create account section -->
            <div class="signup" id="signup">
                <div class="row">
                    <div class="col">
                        <h1>Benefits of joining</h1>
                        <p>Becoming a member of the TaskBee family is free and super easy. These are <em>some</em> of the benefits of joining:</p>
                        <ul>
                            <li>Unlimited access to public community projects</li>
                            <li>Unlimited number of personal uploads</li>
                            <li>Get your work rated by others</li>
                            <li>Download code snippets, photographs, tutorials etc.</li>
                            <li>Collect all your projects in one place</li>
                        </ul>
                    </div>
                    <div class="col">
                        <?php
                        include "app/conf/conf_db.php";
                        ?>
                        <form method="post" action="app/signup.php" enctype="multipart/form-data" autocomplete="off">
                            <label for="username" class="grey-text">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                            <label for="email" class="grey-text">E-mail address</label>
                            <input tyoe="email" id="email" name="email" class="form-control" required>
                            <label for="password" class="grey-text">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                            <small class="form-text text-muted">Password must contain at least 1 uppercase letter, 1 number</small>
                            <label for="rpassword" class="grey-text">Repeat password</label>
                            <input type="password" id="rpassword" name="rpassword" class="form-control" required>
                            <span id="confirmMessage" class="confirmMessage"></span>
                            <label class="grey-text">Solve the math equation: 1 + 1 = ?</label>
                            <select class="form-control" id="mathEq" required>
                                <option selected disabled>Select an answer</option>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                            <div class="text-center mt-4">
                                <button class="btn-standard" id="signup" type="submit" name="signup">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>

        <footer>
            <div class="footer-copyright py-3 text-center">
                © 2018 Copyright David Mohlén
            </div>
        </footer>
    </div>
    <!-- Bootstrap, JQuery, Popper, MD, Signup validation -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/signup_validation.js"></script>
    <script src="app/resources/mdb.min.js"></script>
</body>

</html>
