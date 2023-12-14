<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $stmt = $conn->prepare("SELECT * FROM products WHERE ID_PRODUCT = ?");
    $stmt->execute();
    $result = $stmt -> get_result();
    $array = array();
    $content = '';
    while ( $row = $result->fetch_assoc() ) {
        $content .= "<div>$row</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?=$content;?>
</body>
</html>