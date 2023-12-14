<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$usertype = "peasant";
$stmt = $conn->prepare("SELECT * FROM users WHERE USER_TYPE = ?");
$stmt->bind_param("s",$usertype);
$stmt->execute();
$result = $stmt -> get_result();
$array = array();
while ( $row = $result->fetch_assoc() ) {
    $array[]  = $row;
}
echo json_encode($array);