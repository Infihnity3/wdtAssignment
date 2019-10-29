<?php

if(isset($_POST['email'])){
//connect with the database
include "conn.php";
//ret mysqli_real_escape_string($conn,$_POST['pass']);
$email = $_POST['email'];
$password = $_POST['pass'];
 //sql checking for the admin user
 $sql = "Select * from users where user_email = '".$email."'";
$result = mysqli_query($conn, $sql);
// echo $sql;

    $num_row = mysqli_num_rows($result);
    if($num_row <= 0)
    {
        echo "<script>alert('Wrong username, Please Try Again!');";
        die("window.history.go(-1);</script>");
    }
    else{
        if($row = mysqli_fetch_array($result))//use session
        {   
            
            if(password_verify($password, $row['user_password'])){ //verify password hash 
                
                session_start();
                $_SESSION['email'] = $row['user_email'];
                $_SESSION['password'] = $row['user_password'];
                $_SESSION['role'] = $row['user_role'];
                $_SESSION['user'] = $row['user_name'];
                echo "Success";
                if($row['user_role']==="1")//determine which page to go to
                {
                
                    echo "<script>window.location.href='home.php';</script>";
                }
                else if($row['user_role']==="0")
                {
                    echo "<script>alert('Welcome back! admin');";
                    echo "window.location.href='admin.php';</script>";
                }      
            }
            
        }
    }
}else{
    echo "Noclick";
}
?>