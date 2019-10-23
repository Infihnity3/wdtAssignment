<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home1.css" type="text/css">
</head>
<body>
<?php
    include "header.php";
    ?>
    <!--Maps-->
    <div class="container-fluid">   
        <div class="row bgcolor">
            <div class="col-12">
                <a href="menu.php">
                <button type="button" class="btn btn-outline-dark btn-main"><b>Order Now</b></button>
                </a>  
            </div>
        </div>
    </div>
    <!--Restaurants List-->
    <div class="container-fluid menu">
        <div class="row">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="image/local.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Local</h5>
                    <p class="card-text">Local dishes such as Nasi Lemak, Roti Canai and Char Kuey Teow. You can find it here.</p>
                    </div>
                    <div class="card-footer">
                            <a href="menu.php" class="btn btn-outline-dark btn-menu">View Menu</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="image/japanese.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Japanese</h5>
                    <p class="card-text">Fancy some sushi or just some japanese dishes. Fret not, we've got you covered.</p>
                    </div>
                    <div class="card-footer">
                        <a href="menu.php" class="btn btn-outline-dark btn-menu">View Menu</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="image/thai.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Thai</h5>
                    <p class="card-text">Green curry or Thai fried rice.This is the place for you.</p>
                    </div>
                    <div class="card-footer">
                        <a href="menu.php" class="btn btn-outline-dark btn-menu">View Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
<?php
include "footer.php";
?>
</body>
</html>