<?php
    include "conn.php";

    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $email = $_POST['email_address'];

    $sql = "Update users SET user_name = '$name',user_email = '$email' Where user_id = $uid";
    // echo $sql;
    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) <= 0){
        die("<script>alert('Cannot update data!');</script>");
        echo "<script>window.location.href='edit.php?id=$uid';</script>";
    }

    echo "<script>alert('Update Data Successfully!');</script>";
    echo "<script>window.location.href='edit.php?id=$uid';</script>";
?>