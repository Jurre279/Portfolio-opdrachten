<?php
$serverName = "localhost";
$dBUsernameName = "root";
$dBPasswordName = "root";
$dBName = "krasje_hoosting";

$conn = new mysqli($serverName, $dBUsernameName, $dBPasswordName, $dBName, $port);

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}