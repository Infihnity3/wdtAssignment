<?php
    $server = 'localhost'; //server name
    $username = 'root'; //user name
    $password = ''; //password
    $dbname = 'simplefood'; //database name
    
    $conn = mysqli_connect($server, $username, $password, $dbname);
    
    if(mysqli_connect_error()){
        die('<script>alert("Connection Error")</script>');
    }
    
    echo "<script>alert('Successfully Connected!');</script>";

?>