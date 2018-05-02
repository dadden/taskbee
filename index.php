<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Home | TaskBee</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="app/resources/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="TaskBee logo" </a>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">FAQ</a>
                        </div>
                    </li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="banner">
                <h1>Your #1 source for creative inspiration</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet dui id magna condimentum, et auctor diam faucibus. Etiam in nisl id ante tincidunt tristique ut sit amet neque. </p>
                <button>Find out more</button>
            </div>

            <div class="info-boxes">
                <div>
                    <h2>Sharing is caring</h2>
                    <p>Lorem ipsum dolor sit et, consectetur adipiscing elit Curabitur aliquet dui.</p>
                </div>
                <div>
                    <h2>Find inspiration</h2>
                    <p>Lorem ipsum dolor sit et, consectetur adipiscing elit Curabitur aliquet dui.</p>
                </div>
                <div>
                    <h2>Gather resources</h2>
                    <p>Lorem ipsum dolor sit et, consectetur adipiscing elit Curabitur aliquet dui.</p>
                </div>
            </div>
            <div class="register">
                <div>
                    <h2>Benefits of joining</h2>
                    <p>Becoming a member of the TaskBee family is 100% free and is super easy! Some of the benefits of joining are:</p>
                    <ul>
                        <li>Unlimited access to public projects</li>
                        <li>Unlimited amount of personal uploads</li>
                        <li>Keep track of all your projects in one place</li>
                        <li>Get your work rated by other members</li>
                    </ul>
                </div>
                <div>
                    <form method="post">
                        <label for="username">Username</label>
                        <br>
                        <input type="text" name="username" id="username" class="form-control">
                        <label for="email">E-mail address</label>
                        <br>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="password">Choose a password</label>
                        <br>
                        <input type="password" name="password" id="password" class="form-control">
                        <label for="rpassword">Repeat password</label>
                        <br>
                        <input type="password" id="rpassword" class="form-control">

                        <label for="interest">What is your main point of interest?</label>
                        <br>
                        <select id="interest" class="form-control">
                            <option>Web design</option>
                            <option>UI design</option>
                            <option>Graphics design</option>
                            <option>Web development</option>
                            <option>Photography</option>
                            <option>Art</option>
                            <option>Game design/development</option>
                        </select>
                        <label for="find-taskbee">How did you find TaskBee?</label>
                        <br>
                        <select id="find-taskbee" class="form-control">
                            <option>Google</option>
                            <option>A friend told me about it</option>
                            <option>Forum</option>
                            <option>Advertisment</option>
                            <option>Other</option>
                        </select>
                        <input type="checkbox" name="terms">
                        <label for="terms">I accept the terms of use</label>
                        <br>
                        <button type="submit">Create account</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Frequently asked questions</a></li>
                <li><a href="index.php">Projects</a></li>
                <li><a href="index.php">Login</a></li>
                <li><a href="index.php">Create account</a></li>
            </ul>
            <p>&copy; TaskBee 2018</p>
            <p>Created by David Mohlén</p>
        </div>
        <div>
            <a href="index.php"><img src="img/logo_small.png" alt="TaskBee logo"></a>
            <a href="">
                <p>Back to top</p>
            </a>
        </div>
    </footer>

    <!-- Bootstrap, JQuery, Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>
