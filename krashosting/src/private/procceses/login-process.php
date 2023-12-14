<?php
if(isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];


    require_once $_SERVER['DOCUMENT_ROOT'] . '/ww.php';

    require_once '../functions/login-functions.php';

    if (emptyInputlogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
        echo '<pre>';

        
    }
    
    loginUser($conn, $username, $pwd);
}

else{
    header("location: ../login.php");
    exit();
}