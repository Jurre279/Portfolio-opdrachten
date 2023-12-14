<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$id = $_GET["id"];
$username = $_GET["username"];
$useremail = $_GET["useremail"];
$usertype = $_GET["usertype"];
$userpassword = password_hash($_GET["password"], PASSWORD_DEFAULT);

$qry = "UPDATE users SET USER_USERNAME = ?, USER_EMAIL = ?,USER_PASSWORD = ? WHERE ID_USER = ?";
$mysqli_stmt = $conn->prepare($qry);
$mysqli_stmt->bind_param("ssssi",$username, $useremail, $userpassword, $id);
$mysqli_stmt->execute();
$result = $mysqli_stmt->get_result();

$success = array("success"=>"true");
echo json_encode($success);
