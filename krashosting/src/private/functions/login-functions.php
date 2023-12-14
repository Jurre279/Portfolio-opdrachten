<?php
session_start();

function emptyInputSignup($name, $email, $pwd, $pwdrepeat) {
    $result= false;
    if(empty($name) || empty($email) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidname($name) {
    $result = false;
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdrepeat) {
    $result = false;
    if($pwd !== $pwdrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn, $name, $email) {
   $stmt = $conn->prepare("SELECT * FROM users WHERE USER_USERNAME = ? OR USER_EMAIL = ?;");
   if(!$conn->prepare("SELECT * FROM users WHERE USER_USERNAME = ? OR USER_EMAIL = ?;")) {
    header("location: signup?error=stmtfailed");
        exit();
   }

    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

   $resultData = $stmt -> get_result();

   if ($row = $resultData ->  fetch_assoc()) {
    return $row;
   }
   else{
       $result = false;
       return $result;
   }

}
function createUser($conn, $name, $email, $pwd) {
    $stmt = $conn->prepare("INSERT INTO users (USER_USERNAME, USER_EMAIL, USER_PASSWORD) VALUES (?, ?, ?);");
    if(!$conn->prepare("INSERT INTO users (USER_USERNAME, USER_EMAIL, USER_PASSWORD) VALUES (?,  ?, ?);")) {
        header("location: ../signup.php?error=stmtfailed");
         exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $stmt->bind_param("sss", $name, $email, $hashedPwd);
    $stmt->execute();
    $stmt->close();
    header("location: ../signup.php?error=none");
         exit();
 }
 function emptyInputlogin($name, $pwd) {
    $result= false;
    if(empty($name) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $name, $pwd){
    $uidExists = uidExists($conn, $name, $name);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
    }
    
    $pwdHashed = $uidExists["USER_PASSWORD"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
    }
    elseif($checkPwd === true){

        $_SESSION["userid"] = $uidExists["ID_USER"];
        $_SESSION["user_username"] = $uidExists["USER_USERNAME"];
        Checktype($conn, $name);
    }

}
function Checktype($conn, $name){
    $stmt = $conn->prepare("SELECT USER_TYPE FROM users WHERE USER_USERNAME = ?;");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt -> get_result();
    while ( $row = $result->fetch_assoc() ) {
        if(!empty($row['USER_TYPE'])){
            $_SESSION["USER_TYPE"] = $row['USER_TYPE'];
            $row['USER_TYPE'] == "admin" ? header("location: /src/private/admin-panel/admin-panel.php") : header("location: /index.php");
        }
    }
    $stmt->close();
    exit();
}