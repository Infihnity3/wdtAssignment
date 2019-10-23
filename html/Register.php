<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <?php
    include "header2.php";
    ?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center">Create an account.</h2>
                <div class="form-group"><input class="form-control" type="username" name="username" placeholder="Username"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="confirmpass" placeholder="Confirm Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </div><label>You already have an account? <a class="already" href="Login.html
                ">Login here.</a></label></form>
        </div>
    </div>
    

</body>
<?php
    include "footer2.php";
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
</html>