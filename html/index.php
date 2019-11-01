<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Food Inc</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/css/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{

        background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        }
        a{
        color: #131212;
        }
        /*navbar*/
        .fixed-top{
        background-color: #fff;
        }
        .btn-outline-dark{
        color: #131212;

        }
        .btn-outline-dark:hover{
        background-color: #131212;
        }
        .navbar-logo{
        margin-left: 52%;
        }
        .btn-reg{
        margin-left: 30%;
        margin-top: 6%;
        }

        /*Join Us Now*/
        .btn-join{
        margin-top: 20%;
        margin-left: 48%;
        }
        /*Footer*/
        .page-footer{
        background-color: #fff;
        color: #131212;
        margin-top: 15.25%;
        }
        .list-unstyled{
        color: #f1f1f1;
        }
        .footer-copyright{
        background: #131212;
        color: #f1f1f1;
        }


    </style>
</head>
<body>
  <?php
  include "header2.php";
  ?>
    <!-- Join Us Now-->
    <div class="container-fluid">
        <div class="col-12"> 
            <a href="Register.php">
            <button type="button" class="btn btn-outline-dark btn-join">
                Join Us Now
            </button>
            </a>
        </div>
    </div>
   <?php
   include "footer2.php";
   ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>