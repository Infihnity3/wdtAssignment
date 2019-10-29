<?php
session_start();    
?>

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
    <link rel="stylesheet" href="CSS/headerFooterb4.css" type="text/css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-6">
                    <img class="navbar-logo" src="image/logo.png" alt="Simple Food Inc" width="150" height="150" class="txtlogo"</a>
                </div>
                <div class="col-6">
                    <div class="dropdown">
                        <?php
                         include ('conn.php');
                    
                         if (isset($_SESSION['user'])){
                            
                             echo '<button type="button" class="btn btn-outline-dark dropdown-toggle btn-reg" data-toggle="dropdown">'.$_SESSION['user'].'  
                        </button>';
                        echo '<div class="dropdown-menu">';
                            echo '<a class="dropdown-item" href="home.php">Home</a>';
                           echo '<a class="dropdown-item" href="dashboard.php">Dashboard</a>';
                            echo '<a class="dropdown-item" href="#contact">Help</a>';
                           echo '<a class="dropdown-item" href="Logout.php">Log Out</a>';
                        echo '</div>';
                         }else{
                        echo'<a href="Register.php">
                       <button type="button" class="btn btn-outline-dark btn-reg" >
                        Log In / Register
                        </button>
                        </a>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>