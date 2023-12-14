<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;

    $id = $_GET["id"];
    $stmt = $conn->prepare("DELETE FROM products WHERE ID_PRODUCT = ?;");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt -> get_result();
    $stmt->close();
    echo json_encode($result);