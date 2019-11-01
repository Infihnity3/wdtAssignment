<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>

        .register-photo {
        background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        padding: 226px 0;
        }

        .register-photo .image-holder {
        display: table-cell;
        width: auto;
        background: url('assets/img/register.jpg');
        background-size: cover;
        }

        .register-photo .form-container {
        display: table;
        max-width: 900px;
        width: 90%;
        
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
        }

        .register-photo form {
        display: table-cell;
        width: 400px;
        background-color: #ffffff;
        padding: 40px 60px;
        color: #505e6c;
        }

        @media (max-width:991px) {
        .register-photo form {
            padding: 40px;
        }
        }

        .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px;
        }

        .register-photo form .form-control {
        background: #f7f9fc;
        border: none;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 6px;
        height: 40px;
        margin-bottom: 15px;
        }

        .register-photo form .btn-primary {
        background: #161515;
        border: none;
        border-radius: 4px;
        padding: 11px;
        box-shadow: none;
        margin-top: 35px;
        text-shadow: none;
        outline: none !important;
        }

        .register-photo form .btn-primary:hover, .register-photo form .btn-primary:active {
        background: #2e2c2c;
        }



        .register-photo form .already {
        
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none;
        }

        .register-photo form .already:hover{
        color: #0a85f8;
        }


    </style>
</head>

<body>
    <?php
    include "header2.php";
    ?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="Register.php">
                <h2 class="text-center">Create an account.</h2>
                <div class="form-group"><input class="form-control" type="username" name="username" placeholder="Username" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="confirmpass" placeholder="Confirm Password" required></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </div><label>You already have an account? <a class="already" href="login1.php">Login here.</a></label></form>
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
    if(isset($_POST['username'])){//if the information input then the function below will start.
    //retrieve data from the top
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpass']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    //if passowrd and confirm pass is different then it will not be able to register.
    if($password !== $confirmpassword){
        
        echo "<script>alert('Password and confirmed password not same!');";
        die("window.history.go(-1);</script>");
    }
    // if(isset($email === "select * from user where user_email"))

    //insert the data into the database
    $sql = "Insert into users (user_name, user_password, user_email, user_last_login) values ('$username', '".md5($password)."','$email','".date("Y-m-d H:i:s")."');";

    // echo $sql;
    //if connection with Db failed then unable to register, else register successfully
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)<=0){
        echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
        die("window.history.go(-1);</script>");
    }else{
         echo "<script>alert('Register Successfully! Please login now!');";
        echo "window.location.href='login1.php  ';</script>";
    }
    }
   
?>
</html>