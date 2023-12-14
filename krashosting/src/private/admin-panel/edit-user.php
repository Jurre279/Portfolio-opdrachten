<?php
// session_start();
// if(!$_SESSION["admin"]) header("location: /index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User bewerken</title>
    <script src="/src/public/js/jquery-3.6.1.js"></script>
</head>
<body>
    <form action="" metod="post" id="edit-user" onsubmit="return false;">
        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">

        <label for="username">Username</label>
        <input type="text" placeholder="" name="username" value="">

        <label for="useremail">Email</label>
        <input type="text" placeholder="" name="useremail" value="">

        <label for="usertype">Usertype</label>
        <input type="text" placeholder="" name="usertype" value="">

        <label for="password">Wachtwoord</label>
        <input type="text" placeholder="" name="password" value="">

        <input type="submit" id="submit-button">
    </form>
    <!-- api -->
    <script src="../api/scripts/user-scripts/edit-user.js"></script>
</body>
</html>