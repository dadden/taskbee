<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | TaskBee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="app/resources/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>

    <header>
        <a href="index.php"><img src="img/logo.png" alt="TaskBee logo" class="logo"></a>
        <nav>
            <a href="#" id="menu-toggle">&#9776</a>
            <ul id="toggled">
                <li class="active">Home</li>
                <li>FAQ</li>
                <li>Projects</li>
                <li>Login <i class="fas fa-lock"></i></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="banner">
            <div class="banner-text">
                <h1>Your #1 source for creative inspiration</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <br> Curabitur aliquet dui id magna condimentum, et auctor
                    <br> diam faucibus. Etiam in nisl id ante tincidunt tristique ut sit amet neque.</p>
                <button>Find out more</button>
            </div>
        </div>

        <div class="info-grid">
            <div>
                <i class="fas fa-share-alt fa-5x"></i>
                <h2>Sharing is caring</h2>
                <p>Maybe you struck lightning with your new creation, so why not share it with others? You are still the rightful owner of your own work.</p>
            </div>
            <div>
                <i class="far fa-lightbulb fa-5x"></i>
                <h2>Find inspiration</h2>
                <p>Are you stuck somewhere in the creative process? Find out what others did to solve the problem you are facing!</p>
            </div>
            <div>
                <i class="fas fa-cloud-download-alt fa-5x"></i>
                <h2>Gather resources</h2>
                <p>Every project that is public and also open source is
                    <br>downlodable - meaning you are free to dive into other members solutions</p>
            </div>
        </div>
        <div class="register">
            <form method="post">
                <label for="usr">Username</label><br>
                <input class="form-control" type="text" id="usr" name="usr">
                <label for="email">E-mail address</label><br>
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
                </select><br>
                <button>Create account</button>
            </form>
        </div>
    </main>

    <footer>
        <div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Create account</a></li>
        </ul>
        </div>
        <div>
            <ul>
                <li><a href="#"><img src="img/logo_small.png" alt="TaskBee logo"></a></li>
                <li><a href="#">Back to top</a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap, JQuery, Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>

</body>
<!-- H -->

</html>
