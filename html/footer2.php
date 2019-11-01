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
    /*Footer*/
    .page-footer{
        background-color: #fff;
        color: #131212;
      position: relative;
    }
    .list-unstyled{
        color: #131212;
    }
    .footer-copyright{
        background: #131212;
        color: #f1f1f1;
    }

    * {
        box-sizing: border-box;
      }
      
      /* Style inputs */
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }
      
      input[type=submit] {
        background-color: #131212;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #363535;
      }
      
      /* Style the container/contact section */
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
      }
      
      /* Create two columns that float next to eachother */
      .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
      }
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
</head>
<body>
   
    <!--footer-->
    <footer class="page-footer blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">   
                    <!-- About -->  
                    <div class="col-4 foot-space"> 
                      <h5 class="text-uppercase">Simple Food Inc</h5>
                      <p>San Franciso, California, U.S.A.</p>
                      <p>+1 234950532</p>
                      <p>We are a Food Ordering Company</p>
                      <a href="mailto:simplefoodinc@mail.com"><img src="image/email.png" alt="email us" class="email"></a>
                    </div>  
                    <!-- Quick Links -->
                    <div class="col-4 foot-space">
                      <h5 class="text-uppercase">Quick Links</h5>
                      <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Register.php">Log In/Register</a></li>
                      </ul>
                    </div>
                    <!-- Enquiry -->
                    <div class="footer form">
                    <h2>Enquiry</h2>
                    <br>
                    <form action="insert.php" method="post">
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