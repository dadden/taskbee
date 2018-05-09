<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | TaskBee</title>
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
                    <li class="active">Home</li>
                    <li><a href="frequently-asked-questions.php">FAQ</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="login.php">Login <i class="fas fa-lock"></i></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <!-- Banner -->
            <div class="banner-subpage">
                <div class="banner-text">
                    <h1>Public community projects</h1>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort by: Latest
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Latest</a>
                    <a class="dropdown-item" href="#">Rating</a>
                    <a class="dropdown-item" href="#">Downloads</a>
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
