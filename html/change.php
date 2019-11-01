<?php
include "conn.php";
session_start();
   
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $username = $_POST['user'];

    $sql = "Update users Set ".

    "user_email = '$email',".
    "user_password = '$pass',".
    "user_name = '$username'";

    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)<=0){
        echo "<script>alert('Error 404');</script>";
        echo "<script>window.location.href='dashboard.php';</script>";
    } else{
        echo "<script>alert('Changed successfully');</script>";
        echo "<script>window.location.href='dashboard.php';</script>";
    }

?>