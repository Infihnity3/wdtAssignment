<?php
    include "conn.php"; //connection

    //retrieve data from register.html
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpass']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    if($password !== $confirmpassword){
        echo "<script>alert('Password and confirmed password not same!');";
        die("window.history.go(-1);</script>");
    }

    $sql = "Insert into users (user_name, user_password, user_email, user_last_login) values ('$username', '".md5($password)."','$email','".date("Y-m-d H:i:s")."');";

    // echo $sql;
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)<=0){
        echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
        die("window.history.go(-1);</script>");
    }   
    else{
         echo "<script>alert('Register Successfully! Please login now!');";
        echo "window.location.href='login.html';</script>";
    }

   
?>