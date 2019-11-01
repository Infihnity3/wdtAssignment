<?php
session_start();

include "conn.php";


$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);

$sql = "Select * from users where user_email = '".$email."'
and user_password = '".md5($password)."'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)<=0)
{
    //sql checking for the admin user
    $sql = "Select * from users where user_email = '".$email."'
    and user_password = '".$password."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)<=0)
    {
    echo "<script>alert('Wrong email / password ! Please
    Try Again!');";
    die("window.history.go(-1);</script>");
    }
}
if($row=mysqli_fetch_array($result))
{
    $_SESSION['email'] = $row['user_email'];//use session
    $_SESSION['password'] = $row['user_password'];
    $_SESSION['role'] = $row['user_role'];
    $_SESSION['user'] = $row['user_name'];
}
if($_SESSION['role']==="1")
{
    echo "<script>window.location.href='home.php';</script>";
}
else if($_SESSION['role']==="0")
{
    echo "<script>window.location.href='admin.php';</script>";
}

?>