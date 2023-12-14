<?php
// session_start();
// if(!$_SESSION["admin"]) header("location: /index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product maken</title>
    <script src="/src/public/js/jquery-3.6.1.js"></script>
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
            <div class="nav-item nav-item-active">
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
            <div class="content-title">Product maken</div>
            <div class="content-subtitle">Vul alles in om een product te maken</div>
            <div class="content-devider"></div>

            <div class="content-form-container">
                <form action="" metod="post" id="add-product" onsubmit="return false;">
                    <div class="form-left-container">
                        <input type="text" class="form-text-input" placeholder="Product titel..." name="title">
                        
                        <input type="text" class="form-text-input" placeholder="Product prijs..." name="price">
                        
                        <input type="text" class="form-text-input" placeholder="Product specificaties" name="specifications">
                    </div>
                    
                    <textarea class="form-textarea-input" placeholder="Productbeschrijving..." name="description"></textarea>
                    
                    <input type="submit" id="submit-button" value="Maak aan">
                </form>
            </div>
        </div>
    </div>

    
    <div id="message" style="display:none;">Product is toegevoegd</div>
    <!-- api -->
    <script src="../api/scripts/product-scripts/add-product.js"></script>
</body>
</html>