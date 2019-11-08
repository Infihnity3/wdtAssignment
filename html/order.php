
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
    <style>
        body{
        
        background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        }
        
        /* menu */
        .container{
            margin-top: 200px;
            background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        }
    
        .btn-main{
            margin-left: 45%;
            margin-top: 5%;
        }
        .labelPos{
            margin-top: 12.5%;
            margin-left: 25%;
        }
        .selectPos{
            margin-top: 1%; 
        }
        .select{
            width:20%;
            margin-left: 37.5%;
        }
        
        a{
            color: #131212;
        }
    </style>
</head>
<body>
    <?php
    include "header2.php";
    ?>
        <h1 class="labelPos">Please choose the food that you would like to order:</h1>
        <div class="select">
            <p> *You must select 3 choices of different cuisines</p>
        <form action="orderFood.php" method="POST">
            <select class='custom-select custom-select-sm selectPos' name='food_name' required>
            <option selected></option>
    <?php
        include "conn.php";
        $sql = "select * from food";
        $result =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($result)){
                echo "<option name='food_name' value=".$rows['food_ID'].">".$rows['food_name'].'  '.'RM'.$rows['food_price']."</option>";
                        
            }

    ?>
                </select>
                <select class='custom-select custom-select-sm selectPos' name='food_name2'>
                <option  selected></option>
    <?php
        include "conn.php";
        $sql = "select * from food";
        $result =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($result)){
                echo "<option name='food_name2' value=".$rows['food_ID'].">".$rows['food_name'].'  '.'RM'.$rows['food_price']."</option>";
                        
            }
    ?>
                </select>
                <select class='custom-select custom-select-sm selectPos' name='food_name3'>
                <option selected></option>
    <?php
        include "conn.php";
        $sql = "select * from food";
        $result =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($result)){
                echo "<option name='food_name3' value=".$rows['food_ID'].">".$rows['food_name'].'  '.'RM'.$rows['food_price']."</option>";
                        
            }
        
    ?>
                </select>
            </div>
        <a href="#">
            <button class="btn btn-outline-dark btn-main">Confirm Order</button>
        </a>
        </form>
    <?php
    include "footer.php";
    ?>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>