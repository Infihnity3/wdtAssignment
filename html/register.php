<?php
include "conn.php"; //connnection

//retrieve data from register.html
$username = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpass']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

if($password !== $confirmpassword)
{
echo "<script>alert('Password and confirmed password not same!'); ";
die("window.history.go(-1);</script>");
}

$sql = "Insert into users (user_name, user_password, user_email, user_last_login ) VALUES ('$username','".md5($password)."','$email','".date("Y-m-d H:i:s")."');";
mysqli_query($conn, $sql);

//echo $sql;
if(mysqli_affected_rows($conn)<=0)
{
echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
die("window.history.go(-1);</script>");
}

echo "<script>alert('Register Successfully!Please login now!');";
echo "window.location.href='login.html';</script>";

?>