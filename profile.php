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
                        <li><a href="index.php">Home</a></li>
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
                        <a href="profile_settings.php">
                            <button class="btn-square" id="settings"><i class="fas fa-cog"></i></button>
                        </a>
                        <a href="new_project.php">
                            <button class="btn-square" id="new"><i class="fas fa-plus"></i></button>
                        </a>
                    </div>
                </div>

                <!-- Table displaying user created projects -->
                <?php

                include "app/conf/conf_db.php";

                /* Connect to the database */
                $conn = new mysqli($hostname, $user, $password, $database);

                /* Display an error if connection failed */
                if ($conn->connect_error) {
                    die("<p>An error occurred: " . $conn->connect_error . "</p>");
                }

                // Search the table tb_projects for projects linked to the user
                $sql = "SELECT * FROM tb_projects WHERE user = '{$_SESSION["user"]}'";

                // Run SQL
                $query = mysqli_query($conn, $sql);

                // Display an error if SQL failed
                if (!$query) {
	               die ('SQL Error: ' . mysqli_error($conn));
                }

                ?>
                <div class="pr-projects">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Preview</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Rating</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){

                                // Print table
                                echo '<tr>
                                <td><img src="uploads/'.$row['thumb'].'"></td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['description'].'</td>
                                <td>0</td>
                                <td><button class="btn-table">View</button></td>
                                </tr>';


                            }
                            // Shut down connection
                            $conn->close();
                            ?>
                            <!--<tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button class="btn-standard">View</button></td>
                            </tr>-->
                        </tbody>
                    </table>
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
