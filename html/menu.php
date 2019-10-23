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
</head>
<body>
    <!--navbar-->
    <div class="container-fluid fixed-top">
        <div class="row">
            <div class="col-6">
                <a class="navbar-logo" href="home.php"><img src="image/logo.png" alt="Food Ordering Service" width="150" height="150" class="txtlogo"></a>
            </div>
            <div class="col-6">
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle btn-reg" data-toggle="dropdown">
                    Profile
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="home.php">Home</a>
                      <a class="dropdown-item" href="dashboard.php">Dashbaord</a>
                      <a class="dropdown-item" href="#contact">Help</a>
                      <a class="dropdown-item" href="index.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0 text-primary">Our Menu</h1>
            <p class="lead">Begin with a selection from our award winning dishes.</p>
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Local</h3>
            <hr class="accent my-5">
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM10</span>
                <h6 class="text-truncate">Nasi Lemak</h6>
                <p class="small">fragrant rice served with sambal and eggs</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM10</span>
                <h6 class="text-truncate">Roti Canai</h6>
                <p class="small">Made from douch which is composed by fat, flour and water</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM10</span>
                <h6 class="text-truncate">Char Kuey Teow</h6>
                <p class="small">Flat rice noodles fried in garlic, sweet soys and lard with ingredients such as egg, chinese waxed sausage, breanspouts and cockles. </p>
            </div>
            
           
        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Japanese</h3>
            <hr class="accent my-5">
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM150</span>
                <h6 class="text-truncate">Nigiri Sushi</h6>
                <p class="small">Slices of raw fish served with hand pressed vinegared rice.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM750</span>
                <h6 class="text-truncate">Tuna Sashimi</h6>
                <p class="small">Sliced raw tuna from diffrent parts of the Tuna.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM75</span>
                <h6 class="text-truncate">Tempura</h6>
                <p class="small">Vegetables and seafood dipped in a batter and fried in deep fat.</p>
            </div>

        </div>
        <div class="col-12 mt-4">
            <h3 class="text-center">Thai</h3>
            <hr class="accent my-5">
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM50</span>
                <h6 class="text-underline">Thai Fried Rice</h6>
                <p class="small">Fried jasmine rice served with a handful of seafood</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM65</span>
                <h6>Tom Yum</h6>
                <p class="small">
                  Sour Thai soup served with seafood.</p>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">RM50</span>
                <h6>Green Curry</h6>
                <p class="small">
                   Seafood served with curry cooked with green curry paste with ingredients such as green chilis and ginger.</p>
            </div>
            
        </div>
        <div class="col-12 mt-4">
            <hr class="accent my-5">
        </div>
        <div class="container-fluid">   
        <div class="row bgcolor">
            <div class="col-12">
                <a href="#">
                <button type="button" class="btn btn-outline-dark btn-main"><b>Order Now</b></button>
                </a>    
            </div>
        </div>
    </div>
    </div>
</div>
      <!--Footer-->
<footer class="page-footer blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">   
            <!-- About -->  
            <div class="col-4 foot-space"> 
              <h5 class="text-uppercase">Simple Food Inc</h5>
              <p>San Franciso, California, U.S.A.</p>
              <p>+1 234950532</p>
              <a href="mailto:simplefoodinc@mail.com"><img src="image/email.png" alt="email us" class="email"></a>
            </div>  
            <!-- Quick Links -->
            <div class="col-4 foot-space">
              <h5 class="text-uppercase">Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="home.php">Home</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="myOrders.php">My Orders</a></li>
                <li><a href="index.php">Log Out</a></li>
              </ul>
            </div>
            <!-- Enquiry -->
            <div class="col-4 foot-space" id="contact">
              <h5 class="text-uppercase">Contact Us</h5>
            </div>
        </div>
          <!-- Copyright -->
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright by Zack Chow
    </div>
</footer>
</body>
</html>