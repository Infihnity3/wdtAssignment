<?php
$conn = mysqli_connect('localhost','root','','myaddressbook');

if(mysqli_connect_errno()){
    die("<script>alert('Connection failed: Please check your SQL connection!');</script>");
}

echo "<script>alert('Successfully connected!');</script>";

?>
<!-- $server = 'localhost'; //server name
$username = 'root'; //user name
$password = ''; //password
$dbname = 'myaddressbook'; //database name

$conn = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_error()){
    die('<script>alert("Connection Error")</script>');
}

echo "<script>alert('Successfully Connected!');</script>"; -->