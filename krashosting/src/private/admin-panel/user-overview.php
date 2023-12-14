<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User overview</title>
    <style>.container                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       {display:flex;flex-direction:column}                                                                                                                                                                                                                                                                                                                                                                                                                                                                .product{display:flex; justify-content:space-between;padding:10px;}                                                                                                                                                                                                                         </style>
    <script src="/src/public/js/jquery-3.6.1.js"></script>
    <script src="../api/scripts/user-scripts/user-management.js"></script>
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
            <div class="nav-item nav-item-active">
                <a href="./user-overview.php">Account beheer</a>
            </div>
        </div>
        <div class="content-container">
            <div class="content-title">Gebruiker overview</div>
            <div class="content-subtitle">Snelle overview van alle gebruikers</div>
            <div class="content-devider"></div>

            <div class="container"></div>
        </div>
    </div>
</body>
</html>