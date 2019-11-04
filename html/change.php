<?php
include "conn.php";

    $uid =$_POST['ID'];
    $email1 =$_POST['email'];
    $password1 =$_POST['password'];
    $username1 = $_POST['user'];

    $sql = "Update users Set ".
    "user_email = '$email1',".
    "user_password = '".md5($password1)."',".
    "user_name = '$username1' Where user_id = $uid";

    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)<=0){
        die ("<script>alert('Error 404');</script>")   ;
        echo "<script>window.location.href='dashboard.php?id=$uid';</script>";
    } else{
        echo "<script>alert('Changed successfully');</script>";
        echo "<script>window.location.href='dashboard.php?id=$uid';</script>";
    }

?>