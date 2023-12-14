<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../public/css/login-signup.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    
    <nav class="navbar">
        <div class="logo">
            <a href="../../index.php">Kras <span>Hosting</span> </a>
        </div>
        <div class="nav-menu">
            <div class="nav-menu-links">
                <a href="../../index.php">Home</a>
                <a href="">About</a>
                <a href="./pages/contact.php">Contact</a>
            </div>
            <button class="log-in"><a href="">Sign Up</a></button>
            <button class="log-in"><a href="./login.php">Log In</a></button>
            <!-- <?php
                if(USER_TYPE === "admin") {
                    echo `<button class="log-in"><a href="">Admin Panel</a></button>`;
                };
            ?> -->
        </div>
        <div class="nav-menu-btn">
            <i class="fa fa-bars fa-solid"></i>
        </div>
    </nav>

    <!-- Full-page navigation menu -->
    <div class="full-page-nav">
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
        <div class="full-page-menu">
            <a href="../../index.php">Home</a>
            <a href="">About</a>
            <a href="./pages/contact.php">Contact</a>
            <a href="">Sign Up</a>
            <a href="./login.php">Log In</a>
            <!-- <?php
                if(USER_TYPE === "admin") {
                    echo `<a href=" ">Admin Panel</a>`;
                };
            ?> -->
        </div>
    </div>

    <div class="login-signup-main">
        <div class="container-main">

            <div class="title-container">
                <h1>Welcome, let's get started</h1>
            </div>

            <div class="login-signup-container">
                <p class="login-signup-p-tag">
                    <a class="login-signup-a-tag" href="./login.php">
                        <span> 
                            ALREADY HAVE AN ACCOUNT? LOG IN.
                        </span>
                    </a>
                </p>
            </div>

            <form action="procceses/signup-process.php" method="post">
                <input class="input" type="text" name="name" placeholder="Full name">
                <input class="input" type="text" name="email" placeholder="Email">
                <input class="input" type="password" name="pwd" placeholder="Password">
                <input class="input" type="password" name="pwdrepeat" placeholder="RePassword">
                <button type="submit" name="submit">Sign up</button>
            </form>
            <div class="feedback">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo"<p>Vul alle velden in!</p>";
                        }
                        elseif($_GET["error"] == "invalidname"){
                            echo"<p>Kies een ander naam!</p>";
                        }
                        elseif($_GET["error"] == "invalidemail"){
                            echo"<p>Kies een ander email!</p>";
                        }
                        elseif($_GET["error"] == "passwordsdontmatch"){
                            echo"<p>Wachtwoorden zijn niet gelijk!</p>";
                        }
                        elseif($_GET["error"] == "stmtfailed"){
                            echo"<p>Er ging iets fout, Probeer opnieuw!</p>";
                        }
                        elseif($_GET["error"] == "usernametaken"){
                            echo"<p>Naam bestaat al!</p>";
                        }
                    }
                    ?>
                </div>
                <div class="created">
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "none"){
                                echo"<p>Account gemaakt.</p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="khf-copyright">
        <div class="khf-cp-wrapper">
            <div class="khf-cp-text khf-cp-title">© 2020 KRAS HOSTING</div>
            <div class="khf-cp-text">ALL RIGHTS RESERVED</div>
        </div>
    </div>

    <script src="src/public/js/script.js"></script>
</body>
</html>