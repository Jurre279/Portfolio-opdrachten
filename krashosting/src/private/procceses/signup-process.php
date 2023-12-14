<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';
;
    require_once '../functions/login-functions.php';
    
    if (emptyInputSignup($name, $email, $pwd, $pwdrepeat) !== false){
        header("location: ../private/../signup.php?error=emptyinput");
        exit();
    }
    elseif (invalidname($name) !== false){
        header("location: ../private/../signup.php?error=invalidname");
        exit();
    }
    elseif (invalidEmail($email) !== false){
        header("location: ../private/../signup.php?error=invalidemail");
        exit();
    }
    elseif (pwdMatch($pwd, $pwdrepeat) !== false){
        header("location: ../private/../signup.php?error=passwordsdontmatch");
        exit();
    }
    elseif (uidExists($conn, $name, $email) !== false){
        header("location: ../private/../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $email, $pwd);
}
 else{
    header("location: ../../signup.php");
    exit();
}