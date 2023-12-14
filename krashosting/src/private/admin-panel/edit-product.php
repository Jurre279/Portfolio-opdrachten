<?php
// session_start();
// if(!$_SESSION["admin"]) header("location: /index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Bewerken</title>
    <script src="/src/public/js/jquery-3.6.1.js"></script>
</head>
<body>
    <form action="" metod="post" id="edit-product" onsubmit="return false;">
        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">

        <label for="title">Producttitel</label>
        <input type="text" placeholder="" name="title" value="">
        
        <label for="description">Productbeschrijving</label>
        <input type="text" placeholder="" name="description" value="">
        
        <label for="price">Prijs</label>
        <input type="text" placeholder="" name="price" value="">
        
        <label for="specifications">Specificaties</label>
        <input type="text" placeholder="" name="specifications" value="">
        
        <input type="submit" id="submit-button">
    </form>
    <!-- api -->
    <script src="../api/scripts/product-scripts/edit-product.js"></script>
</body>
</html>