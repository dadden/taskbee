<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | TaskBee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="app/resources/bootstrap.min.css">
    <link rel="stylesheet" href="app/resources/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>

    <header>
        <a href="index.php"><img src="img/logo.png" alt="TaskBee logo" class="logo"></a>
        <nav>
            <a href="#" id="menu-toggle">&#9776</a>
            <ul id="toggled">
                <li class="active">Home</li>
                <li><a href="frequently-asked-questions.php">FAQ</a></li>
                <li><a href="projects.php">Projects</a></li>
                <?php
                echo "<li><a href=\"#myModal\" class=\"trigger-btn\" data-toggle=\"modal\">Login <i class=\"fas fa-lock\"></i></a></li>";
                ?>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">
        <main>
            <div class="banner">
                <div class="banner-text">
                    <h1>Your #1 source for creative inspiration</h1>
                    <h5>Revolutionary? Maybe not, but you are sure to enjoy you stay. Don't have the budget<br> to create your own portfolio or do you simply want to expand your digital footprint?<br></h5>
                    <button type="button" class="btn btn-primary"><a href="#create-account">Become a member today!</a></button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <i class="fas fa-share-alt fa-5x"></i>
                    <h2>Sharing is caring</h2>
                    <p>Maybe you struck lightning with your new creation, so why not share it with others? You are still the rightful owner of your own work.</p>
                </div>
                <div class="col-sm">
                    <i class="far fa-lightbulb fa-5x"></i>
                    <h2>Find inspiration</h2>
                    <p>Are you stuck somewhere in the creative process? Find out what others did to solve the problem you are facing!</p>
                </div>
                <div class="col-sm">
                    <i class="fas fa-cloud-download-alt fa-5x"></i>
                    <h2>Gather resources</h2>
                    <p>Every project that is public and also open source is
                        <br>downlodable - meaning you are free to dive into other members solutions</p>
                </div>
            </div>
            <div class="register row">
                <div class="col">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://placehold.it/800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://placehold.it/800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://placehold.it/800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col" id="create-account">
                    <h2>Create your account today!</h2>
                    <form method="post">
                        <label for="usr">Username</label>
                        <br>
                        <input class="form-control" type="text" id="usr" name="usr">
                        <label for="email">E-mail address</label>
                        <br>
                        <input class="form-control" type="email" id="email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <label for="pswrd">Password</label>
                        <input class="form-control" type="password" id="pswrd" name="pswrd">
                        <small id="pswrdHelp" class="form-text text-muted">Choose a strong password (Min. 7 characters, 1 number)</small>
                        <label for="rpswrd">Repeat Password</label>
                        <input class="form-control" type="password" id="rpswrd">
                        <label>What is your main point of interest?</label>
                        <select class="form-control">
                            <option value="Choose" selected disabled>Choose one from the list</option>
                            <option value="Art">Art</option>
                            <option value="Digital design">Digital design</option>
                            <option value="Photography">Photography</option>
                            <option value="Game development">Game development</option>
                            <option value="Game design">Game design</option>
                            <option value="Programming">Programming</option>
                            <option value="Web design">Web design</option>
                            <option value="Web development">Web development</option>
                            <option value="Other">Other</option>
                        </select>
                        <br>
                        <button class="blueBtn" name="create">Create account</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <footer class="page-footer font-small blue pt-4 mt-4">

        <!--Footer Links-->
        <div class="container-fluid text-center text-md-left">
            <div class="row">

                <!--First column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
            <a href="#"> David Mohlén </a>
        </div>
        <!--/.Copyright-->

    </footer>

    <!-- Bootstrap, JQuery, Popper, MD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="app/resources/mdb.min.js"></script>

    <?php
        include "app/conf/conf_db.php";
    ?>
</body>

</html>
