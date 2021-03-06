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
                        <li>Home</li>
                        <li><a href="frequently-asked-questions.php">FAQ</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li class="drop-down active"><a href="profile.php">Profile <i class="fas fa-user"></i></a></li>
                        <li><a href="app/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <!-- Banner -->
                <div class="banner-subpage">
                    <div class="banner-text">
                        <h1><?php
                        // Display username in subpage banner
                        echo $_SESSION["user"];
                        ?></h1>
                    </div>
                    <div class="banner-btns-square">
                        <button class="btn-square" id="settings"><a href="profile_settings.php"><i class="fas fa-cog"></i></a></button>
                        <button class="btn-square" id="new"><a href="new_project.php"><i class="fas fa-plus"></i></a></button>
                    </div>
                </div>

                <div class="new-project">
                    <h2>Upload a new project</h2>
                    <form method="post" action="app/upload_project.php" enctype="multipart/form-data">
                        <label for="name" class="grey-text">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                        <label for="desc" class="grey-text">Description</label>
                        <textarea id="desc" name="desc" rows="4" class="form-control"></textarea>
                        <small class="form-text text-muted">Tip: Keep it relatively short and straight forward</small>
                        <label for="thumb" class="grey-text">Upload a thumbnail</label>
                        <input type="file" id="thumb" name="thumb">
                        <small class="form-text text-muted">Maximum 1MB and 250x250px</small>
                        <label for="image" class="grey-text">Upload images</label>
                        <input type="file" id="image" name="image">
                        <small class="form-text text-muted">Maximum 1MB and 1920x1080px</small>
                        <label for="zip" class="grey-text">Upload project files</label>
                        <input type="file" id="zip" name="zip">
                        <small class="form-text text-muted">Maximum 15MB. Supported file types are .zip, .rar</small>
                        <label for="visibility" class="grey-text">This project is private</label>
                        <input type="checkbox" id="visibility" name="visibility" class="form-control">
                        <input type="text" name="user" id="user-input" value="<?php echo htmlspecialchars($_SESSION["user"]); ?>">
                        <button class="btn-standard" name="new-project">Upload</button>
                    </form>
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
