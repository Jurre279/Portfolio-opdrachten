<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
            <button class="log-in"><a href="./signup.php">Sign Up</a></button>
            <button class="log-in"><a href="">Log In</a></button>
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
            <a href="./signup.php">Sign Up</a>
            <a href="">Log In</a>
            <!-- <?php
                if(USER_TYPE === "admin") {
                    echo `<a href=" ">Admin Panel</a>`;
                };
            ?> -->
        </div>
    </div>

    <div class="login-signup-main">
        <div class="container-main">
            <div class="login-title-container">
                <h1>Enter your email and password to log in</h1>
            </div>

            <div class="login-signup-container">
                <p class="login-signup-p-tag">
                    <a class="login-signup-a-tag" href="./signup.php">
                        <span> 
                            NEW HERE? OPEN AN ACCOUNT 
                        </span>
                    </a>
                </p>
            </div>

            <form action="procceses/login-process.php" method="post">
                <input class="input" type="text" name="uid" placeholder="Username/Email">
                <input class="input" type="password" name="pwd" placeholder="Wachtwoord">
                <button type="submit" name="submit">login</button>
            </form>

            <div class="feedback">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo"<p>Vul alle velden in!</p>";
                        }
                        elseif($_GET["error"] == "wronglogin"){
                            echo"<p>Foute login!</p>";
                        }
                    }
                ?>
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