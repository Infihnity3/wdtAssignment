
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
    <!--navbar-->
    <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-6">
                    <img class="navbar-logo" src="image/logo.png" alt="Simple Food Inc" width="150" height="150" class="txtlogo">
                </div>
                <div class="col-6">
                <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle btn-reg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="admin.php">User Information</a>
                        <a class="dropdown-item" href="insertFood.php">Add Item</a>
                        <a class="dropdown-item" href="contact.php">Contact Form</a>
                        <a class="dropdown-item" href="Logout.php">Log Out</a>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>