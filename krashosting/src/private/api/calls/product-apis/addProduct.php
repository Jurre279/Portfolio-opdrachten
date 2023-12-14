<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$title = $_GET["title"];
$description = $_GET["description"];
$price = $_GET["price"];
$specifications = $_GET["specifications"];

$qry = "INSERT INTO products (PRODUCT_NAME, PRODUCT_DESCRIPTION, PRODUCT_PRICE, PRODUCT_SPECIFICATIONS) VALUES (?,?,?,?)";
$mysqli_stmt = $conn->prepare($qry);
$mysqli_stmt->bind_param("ssss",$title, $description, $price, $specifications);
$mysqli_stmt->execute();
$result = $mysqli_stmt->get_result();

$success = array("success"=>"true");
echo json_encode($success);
