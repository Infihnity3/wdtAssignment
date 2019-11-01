
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
      body {
          background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
          padding: 226px 0;
        }

      .login-clean {
        margin-bottom: 20%;
      }

      .login-clean form {
        max-width: 320px;
        width: 90%;
        margin: 0 auto;
        background-color: #ffffff;  
        padding: 40px;
        border-radius: 4px;
        color: #505e6c;
        box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
      }

      .login-clean .illustration {
        text-align: center;
        padding: 0 0 20px;
        font-size: 100px;
        color: rgb(244,71,107);
      }

      .login-clean form .form-control {
        background: #f7f9fc;
        border: none;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 8px;
        height: 42px;
      }

      .login-clean form .btn-primary {
        background: #161515;
        border: none;
        border-radius: 4px;
        padding: 11px;
        box-shadow: none;
        margin-top: 26px;
        text-shadow: none;
        outline: none !important;
      }

      .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
        background: #2e2c2c;
      }

      .login-clean form .btn-primary:active {
        transform: translateY(1px);
      }

      .login-clean form .forgot {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none;
      }

      .login-clean form .forgot:hover, .login-clean form .forgot:active {
        opacity: 1;
        text-decoration: none;
      }


    </style>
</head>

<body>
    <?php
    include "header2.php";
    ?>
        
    <div class="login-clean">
        <form method="POST" action="login.inc.php">
            <h2 class="sr-only">Login Form</h2><img src="assets/img/logo.png" style="margin-left: 45px;">
            <div class="illustration"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit"></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   
   
   
   <?php
    include "footer2.php";
    ?>
</body>

</html>