<?php
    session_start();
    include "conn.php";

    $username = mysqli_real_escape_string($conn,$_POST['user']);
    $password = mysqli_real_escape_string($conn,$_POST['pass']);

    $sql = "Select * from users where User_Name = '$username' and User_password = 'md5($password)'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) <= 0){
        //sql checking for the admin user
        $sql = "Select * from users where User_Name = '$username' and User_Password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) <= 0){
            echo "<script>alert('Wrong username or password! Please Try Again!');";
            die("window.history.go(-1);</script>");

        }
    }

    if($row = mysqli_fetch_array($result)){
        $_SESSION['user'] = $row['User_Name'];//use session
        $_SESSION['password'] = $row['User_Password'];
        $_SESSION['role'] = $row['User_Role'];
    }

    //check which homepage should it go (USER/ADMIN)
    if($_SESSION['role']==="1"){
        echo "<script>alert('Welcome back! ".$_SESSION['user']."');";
        echo "window.location.href='default.html';</script>";
    }    
    else if($_SESSION['role']===0){
        echo "<script>alert('Welcome back! admin');";
        echo "window.location.href='adminhomepage.html';</script>";
    }
?>