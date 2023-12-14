<?php
// session_start();
// if(!$_SESSION["admin"]) header("location: /index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../../public/css/admin.css">
</head>
<body>
    <div class="top">
        <div class="top-logo">
            <a href="./admin-panel.php">
                Kras <span>Hosting<span> 
            </a>
        </div>
        
        <div class="top-account">
            <div class="top-account-pfp"></div>
            <div class="top-account-name">Firstname Lastname</div>
        </div>
    </div>

    <div class="main">
        <div class="navigation">
        <div class="nav-item">
                <a href="./add-product.php">Product maken</a>
            </div>
            <div class="nav-item">
                <a href="./product-overview.php">Product beheer</a>
            </div>
            <div class="nav-item">
                <a href="">Order beheer</a>
            </div>
            <div class="nav-item">
                <a href="./user-overview.php">Account beheer</a>
            </div>
        </div>
        <div class="content-container">
            <div class="content-title">Overview</div>
            <div class="content-subtitle">A quick overview of products and users</div>
            <div class="content-devider"></div>

            <div class="content-grid-container">
                <div class="content-grid-item content-div-left">
                    <div class="content-grid-item-icon background-first-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
                            <path d="M35 17.5H12.7273M35 31.5H12.7273M35 3.5H12.7273" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.17864 7C4.76955 7 6.36045 5.25 6.36045 3.5C6.36045 1.75 4.76955 0 3.17864 0C1.58773 0 0 1.75 0 3.5C0 5.25 1.58773 7 3.17864 7ZM3.17864 21C4.76955 21 6.36045 19.25 6.36045 17.5C6.36045 15.75 4.76955 14 3.17864 14C1.58773 14 0 15.75 0 17.5C0 19.25 1.58773 21 3.17864 21ZM3.17864 35C4.76955 35 6.36045 33.25 6.36045 31.5C6.36045 29.75 4.76955 28 3.17864 28C1.58773 28 0 29.75 0 31.5C0 33.25 1.58773 35 3.17864 35Z" fill="white"/>
                        </svg>
                    </div>

                    <h2 class="content-grid-item-title">Orders</h2>
                    <button>Order beheer</button>  
                </div>

                <div class="content-grid-item content-div-top-right">
                    <div class="content-grid-item-icon background-second-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path d="M22.9688 0L35 6.06598V19.5938L32.8125 18.4909V8.53028L24.0625 12.9419V17.388L21.875 18.4909V12.9419L13.125 8.53028V12.4421L10.9375 11.3392V6.06598L22.9688 0ZM22.9688 11.029L25.9937 9.49532L18.0811 4.92861L14.4751 6.75529L22.9688 11.029ZM28.3521 8.32349L31.4624 6.75529L22.9688 2.4643L20.4224 3.75677L28.3521 8.32349ZM19.6875 19.5938L17.5 20.6967V20.6795L10.9375 23.9882V31.8291L17.5 28.5032V30.9847L9.84375 34.8449L0 29.8646V18.2152L9.84375 13.2521L19.6875 18.2152V19.5938ZM8.75 31.8291V23.9882L2.1875 20.6795V28.5032L8.75 31.8291ZM9.84375 22.0753L16.1499 18.9045L9.84375 15.7164L3.5376 18.9045L9.84375 22.0753ZM19.6875 22.0581L27.3438 18.1979L35 22.0581V31.1398L27.3438 35L19.6875 31.1398V22.0581ZM26.25 31.9842V26.7282L21.875 24.5224V29.7784L26.25 31.9842ZM32.8125 29.7784V24.5224L28.4375 26.7282V31.9842L32.8125 29.7784ZM27.3438 24.8154L31.4624 22.7302L27.3438 20.6622L23.2251 22.7302L27.3438 24.8154Z" fill="white"/>
                        </svg>
                    </div>

                    <h2 class="content-grid-item-title">Producten</h2>
                    <button>Productbeheer</button>
                </div>

                <div class="content-grid-item content-div-bottom-right">
                    <div class="content-grid-item-icon background-third-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path d="M17.5 0C19.8206 0 22.0462 0.921872 23.6872 2.56282C25.3281 4.20376 26.25 6.42936 26.25 8.75C26.25 11.0706 25.3281 13.2962 23.6872 14.9372C22.0462 16.5781 19.8206 17.5 17.5 17.5C15.1794 17.5 12.9538 16.5781 11.3128 14.9372C9.67187 13.2962 8.75 11.0706 8.75 8.75C8.75 6.42936 9.67187 4.20376 11.3128 2.56282C12.9538 0.921872 15.1794 0 17.5 0ZM17.5 4.375C16.3397 4.375 15.2269 4.83594 14.4064 5.65641C13.5859 6.47688 13.125 7.58968 13.125 8.75C13.125 9.91032 13.5859 11.0231 14.4064 11.8436C15.2269 12.6641 16.3397 13.125 17.5 13.125C18.6603 13.125 19.7731 12.6641 20.5936 11.8436C21.4141 11.0231 21.875 9.91032 21.875 8.75C21.875 7.58968 21.4141 6.47688 20.5936 5.65641C19.7731 4.83594 18.6603 4.375 17.5 4.375ZM17.5 19.6875C23.3406 19.6875 35 22.5969 35 28.4375V35H0V28.4375C0 22.5969 11.6594 19.6875 17.5 19.6875ZM17.5 23.8438C11.0031 23.8438 4.15625 27.0375 4.15625 28.4375V30.8438H30.8438V28.4375C30.8438 27.0375 23.9969 23.8438 17.5 23.8438Z" fill="white"/>
                        </svg>
                    </div>

                    <h2 class="content-grid-item-title">Accounts</h2>
                    <button>Accountbeheer</button> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>