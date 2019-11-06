<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

        body{

        background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        }
        a{
            color: #131212;
        }
        .dash{
            margin-top: 15%;
        }
        .chg {
            width: 25%;
           
        }
        .chgUser{
            height: 10%;
            width:25%;
            line-height:10px;
        }
        .chgPass{
            width: 25%;
        }
        input[type=text] {
            font-size:15px;
            height: 5%;
            padding:0;
        }
        ::placeholder{
                        padding: 0;
                    }
    </style>
</head>
<body>
    <?php
    include "header2.php";
    ?>
    <div class="container-fluid dash">
        <div class="row">
            <div class="col-6">
                <?php
                include "conn.php";
                $username1=$_SESSION['user'];
                
                    $sql = "select * from users where user_name='$username1'";//add a new sql query
                    $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result

                    $sql;
                    if($rows = mysqli_fetch_array($result)){
                        $uID = $rows['user_ID'];
                        $email1 = $rows['user_email'];
                        $password1 = $rows['user_password'];
                        $username1 = $rows['user_name'];
                    }
                   
                ?>
            <h1>Settings</h1>
            <form action="change.php" method="POST">
                <div class="noChg">
                    <p>User ID: </p><input type="number" name="ID" placeholder="Change your username here" height="10px" class="chg chgU" value="<?php echo $uID ?>" readonly><br><br>
                </div>
                <div class="chgUser">
                    <p>Username: </p><input type="text" name="user" placeholder="Change your username here" height="10px" class="chg chgU" value="<?php echo $username1 ?>" readonly>
                </div>
                <div class="chgEmail">
                    <p>Change Email: </p><input type="email" name="email" placeholder="Change your email here" class="chg chgE" value="<?php echo $email1 ?>"><br><br>
                </div>
                
                <div class="chgPass">
                    <p>Change Password: </p><input type="text" name="password" placeholder="Change your password here" class="chg chgP" value="">
                </div>
                    <input class="btn btn-outline-dark btn-reg" type="submit">
                </div>
            </form>
            <div class="col-6">
                <h1>My Orders</h1>
                <table border="1" class="table table-dark">
                    <tr bgcolor="f1f1f1" style="color:#131212">
                        <th>Order ID</th>
                        <th>Food Name</th>
                        <th>Food Price</th>
                    </tr>

                        <?php
                            include "conn.php";//add connection to the php page
                            $sql = "select orderfood.order_ID, food.food_name, food.food_price from food Join orderfood on orderfood.food_ID = food.food_ID WHERE orderfood.food_ID = food.food_ID group by orderfood.order_ID, food.food_name, food.food_price";//add a new sql query
                            $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
                            

                            //if got result, extract the data in $rows[] array (column by column)
                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>".$rows['order_ID']."</td>";
                                echo "<td>".$rows['food_name']."</td>";
                                echo "<td>RM ".$rows['food_price']."</td>";
                                echo "</tr>";
                            }
                        ?>
                </table>
            </div>
            
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>