<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../../public/css/contact.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="../../../index.php">Kras <span>Hosting</span> </a>
        </div>
        <div class="nav-menu">
            <div class="nav-menu-links">
                <a href="../../../index.php">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </div>
            <button class="log-in"><a href="../signup.php">Sign Up</a></button>
            <button class="log-in"><a href="../login.php">Log In</a></button>
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
            <a href="../../../index.php">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="../signup.php">Sign Up</a>
            <a href="../login.php">Log In</a>
            <!-- <?php
                if(USER_TYPE === "admin") {
                    echo `<a href=" ">Admin Panel</a>`;
                };
            ?> -->
        </div>
    </div>

    <div class="contact-main">
        <div class="contact-text">
            <div class="contact-text-title">Contact us</div>
            <div class="contact-text-subtitle">Need to get in touch with us? Either fill out the form with your inquiry or use the contact details indicated at the bottom of the page</div>
        </div>

        <div class="contact-form">
            <div class="contact-form-top-row">
                <div class="contact-form-first-name contact-form-block-cont">
                    <label for="firstName" class="contact-form-block-title">First name <span class="input-required">*</span></label>
                    <input name="firstName" class="contact-form-block-input" type="text">
                </div>
                <div class="contact-form-last-name contact-form-block-cont">
                    <label for="lastName" class="contact-form-block-title">Last name </label>
                    <input name="lastName" class="contact-form-block-input" type="text">
                </div> 
            </div>

            <div class="contact-form-email contact-form-block-cont">
                    <label for="email" class="contact-form-block-title">Email <span class="input-required">*</span></label>
                    <input name="email" class="contact-form-block-input contact-form-email-input" type="text">
                </div>
            
            <div class="contact-form-message contact-form-block-cont">
                <label for="message" class="contact-form-block-title">What can we help you with?</label>
                <textarea name="message" class="contact-form-block-text-area" type="text-area"></textarea>
            </div>

            <div class="contact-form-submit contact-form-block-cont">
                <input class="contact-form-block-submit" type="submit" value="Submit">
            </div>
        </div>
        
    </div>

    <div class="khf-footer">
        <div class="khf-copyright">
            <div class="khf-cp-wrapper">
                <div class="khf-cp-text khf-cp-title">© 2020 KRAS HOSTING</div>
                <div class="khf-cp-text">ALL RIGHTS RESERVED</div>
            </div>
        </div>
    </div>

    <script src="src/public/js/script.js"></script>
</body>
</html>