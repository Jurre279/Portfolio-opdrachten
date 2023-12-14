<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

$id = $_GET["id"];
$usertype = "peasant";
$stmt = $conn->prepare("DELETE FROM users WHERE ID_USER = ? AND USER_TYPE = ?;");
$stmt->bind_param("is", $id,$usertype);
$stmt->execute();
$result = $stmt -> get_result();
$stmt->close();
echo json_encode($result);