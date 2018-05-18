<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        $_SESSION["loggedin"] = false;
        //header("Location: login.php");
    }
    include "app/conf/conf_db.php";
    include "app/applogin.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>FAQ | TaskBee</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="frequently-asked-questions.php">FAQ</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <?php
                    if (isset($_SESSION["user"])){
                        echo "<li><a href=\"profile.php\">Profile <i class=\"fas fa-user\"></i></a></li>";
                        echo "<li><a href=\"app/logout.php\">Logout <i class=\"fas fa-sign-out-alt\"></i></a></li>";
                    } else {
                        echo "<li><a href=\"login.php\">Login <i class=\"fas fa-lock\"></i></a></li>";
                    }

                    ?>
                    </ul>
                </nav>
            </header>

            <main>

                <!-- Banner -->
                <div class="banner-subpage">
                    <div class="banner-text">
                        <h1>Frequently Asked Questions</h1>
                    </div>
                </div>

                <div class="faq">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is registreation required? <i class="fas fa-angle-down"></i></a>
                </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Yes. You need to create an account to upload projects and rate others. But it's <em>free</em> and only takes a few seconds.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How does the rating system work? <i class="fas fa-angle-down"></i></a>
                </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                When you upload a public project you can get it rated by other members. It will be rated from 1 to 5 stars. All ratings are anonymous.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How big can my project files be? <i class="fas fa-angle-down"></i></a>
                </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Images (thumbnail and slides) can be a maximum of 1MB. Your project file (zip/rar) can be a maximum of 15MB.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I forgot my password, what now? <i class="fas fa-angle-down"></i></a>
                </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in">
                            <div class="panel-body">
                                If you lost your password you can recover it my clicking <a href="recover_password.php">HERE</a>. <br>
                                You will recieve an email to the address linked to your account containing a new password for your account. We strongly recommend you change it when you first login with the new password.
                            </div>
                        </div>
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
            <!-- Bootstrap, JQuery, Popper, MD, Checkpass -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <script src="js/menu.js"></script>
            <script src="app/resources/mdb.min.js"></script>
    </body>

    </html>
