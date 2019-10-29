<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headerFooter1.css" type="text/css">
</head>
<body>

      <!--Footer-->
<footer class="page-footer blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">   
            <!-- About -->  
            <div class="col-4 foot-space"> 
              <h5 class="text-uppercase">Simple Food Inc</h5>
              <p>San Franciso, California, U.S.A.</p>
              <p>+60 1234950575</p>
              <a href="mailto:simplefoodinc@mail.com"><img src="image/email.png" alt="email us" class="email"></a>
            </div>  
            <!-- Quick Links -->
            <div class="col-4 foot-space">
              <h5 class="text-uppercase">Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="home.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="Logout.php">Log Out</a></li>
              </ul>
            </div>
            <!-- Enquiry -->
            <div class="footer form" id="contact">
              <h2>Contact Us</h2>
              <br>
              <form action="index.html" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Email Address...">
                <br>
                <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                <br>
                <button type="submit" class="btn btn-outline-dark">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  Send
                </button>
              </form>
              </div>
            </div>
        </div>
          <!-- Copyright -->
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright by Zack Chow
    </div>
</footer>
</body>
</html>