
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/menu.css" type="text/css">
    <style>

    .btn-order {
        margin-left: 47%; 
    }
    .card{
        width:410px;
        height:362px;
    }
    .posW{
        margin-top:15%;
    }
    </style>
</head>
<body>
    <?php
    include "header2.php";
    ?>
<div class='container'>
        <div class='row'> 
        <div class='posW'>
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0 text-primary">Our Menu</h1>
            <p class="lead">Begin with a selection from our award winning dishes.</p>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Local</h3>
            <hr>
        </div>
        <div class='card-columns'>
        <?php     
            $result = mysqli_query($conn, "SELECT * FROM local_food");                  
            while($row = mysqli_fetch_array($result))
            {
                echo  "<div class='card card-body'>
                        <div><img src=".$row["food_img"]." alt='' width='200' height='200'></div>
                        <div>".$row["food_name"]."</div>
                        <div>".$row["food_description"]."</a></div>
                        <div>RM ".$row["food_price"]."</div>
                    </div>";
            }
		?>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Thai</h3>
            <hr>
        </div>
        <div class='card-columns'>
        <?php                       
            $result = mysqli_query($conn, "SELECT * FROM thai_food");
            while($row = mysqli_fetch_array($result))
            {
                echo  "<div class='card card-body'>
                        <div><img src=".$row["food_img"]." alt='' width='325' height='200'></div>
                        <div>".$row["food_name"]."</div>
                        <div>".$row["food_description"]."</a></div>
                        <div>RM ".$row["food_price"]."</div>
                    </div>";
            }
		?>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Japanese</h3>
            <hr>
        </div>
        <div class='card-columns'>
        <?php                       
            $result = mysqli_query($conn, "SELECT * FROM japanese_food");
            while($row = mysqli_fetch_array($result))
            {
                echo  "<div class='card card-body'>
                        <div><img src=".$row["food_img"]." alt='' width='368' height='200'></div>
                        <div>".$row["food_name"]."</div>
                        <div>".$row["food_description"]."</a></div>
                        <div>RM ".$row["food_price"]."</div>
                    </div>";
            }
		?>
        </div>
        </div>
        </div>
	</div>
    <div class="container-fluid ordB">   
        <div class="row bgcolor">
            <div class="col-12">
                <a href="order.php">
                <button type="button" class="btn btn-outline-dark btn-main btn-order"><b>Order Now</b></button>
                </a>    
            </div>
        </div>
     <?php
     include "footer.php";
     ?>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>