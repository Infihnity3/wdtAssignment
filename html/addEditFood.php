<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
        .addF{
            margin-top: 15%;
        }
        .food{
            width: 35%;
        }
        .foodN{
            width: 35%;
        }
        .widthS{
            width: 20%;
        }
        .borderT{
            background-color: rgba(241,241,241,.7);
            width: 16%;
        }
        .borderL{
            background-color: rgba(241,241,241,.7);
            width: 17.5%;
        }
        .borderJ{
            background-color: rgba(241,241,241,.7);
            width: 23.5%;
        }
    </style>
</head>


<body>
    <?php
        include "header.php";
    ?>
    <div class="container-fluid addF">
        <div class="row">
            <div class="col-6">
            <h1>Add Food Item</h1>
            <form action="insertFood.php" method="POST" enctype="multipart/form-data">
                <div class="widthS">
                <p>Choose Cuisine</p>
                <select id="cuisines" class="custom-select custom-select-sm selectPos" required>
                    <option selected>Open this select menu</option>
                    <option value="1">Local</option>
                    <option value="2">Thai</option>
                    <option value="3">Japanese</option>
                </select>
                </div>
                <div class="foodN">
                    <p>Food Name: </p><input type="text" name="name" placeholder="Name.." height="10px" class="food" required>
                </div>
                <div class="foodD">
                    <p>Food Description: </p><textarea type="text" name="description" placeholder="Description.." class="food" required></textarea>
                </div>
                
                <div class="foodP">
                    <p>Food Price: </p><input type="number" name="price" placeholder="Price.." class="food" required>
                </div>
                <div class="foodI">
                    <p>Food Image: </p><input type="file" name="image" id="photo" class="food" required>
                </div> 
                    <input class="btn btn-outline-dark btn-reg" type="submit" name="insert">
               
            </div>
            </form>
            <div class="col-6">
                <h1>Edit Food Items</h1>
                <table border="1" class="table table-dark">
                <h2 class="borderT">Thai Food</h2>
                    <tr bgcolor="f1f1f1" style="color:#131212">
                        <th class="paddingN">Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                        <?php
                            include "conn.php";//add connection to the php page
                            $sql = "select * from thai_food";//add a new sql query
                            $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
                            

                            //if got result, extract the data in $rows[] array (column by column)
                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td class='paddingN'>".$rows['food_name']."</td>";
                                echo "<td>".$rows['food_description']."</td>";
                                echo "<td>".$rows['food_price']."</td>";

                                //create 2 buttons (edit button and delte button in each row)
                                echo "<td><a href='editThai.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark ' style='color:#f1f1f1'>Edit</button></a></td>";
                                echo "<td><a href='deleteThai.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark' style='color:#f1f1f1'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        ?>
                </table>
                <table border="1" class="table table-dark">
                <h2 class="borderL">Local Food</h2>
                    <tr bgcolor="f1f1f1" style="color:#131212">
                        <th class="paddingN">Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                        <?php
                            include "conn.php";//add connection to the php page
                            $sql = "select * from local_food";//add a new sql query
                            $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
                            

                            //if got result, extract the data in $rows[] array (column by column)
                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td class='paddingN'>".$rows['food_name']."</td>";
                                echo "<td>".$rows['food_description']."</td>";
                                echo "<td>".$rows['food_price']."</td>";

                                //create 2 buttons (edit button and delte button in each row)
                                echo "<td><a href='editLocal.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark ' style='color:#f1f1f1'>Edit</button></a></td>";
                                echo "<td><a href='deleteLocal.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark' style='color:#f1f1f1'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        ?>
                </table>
                <table border="1" class="table table-dark">
                <h2 class="borderJ">Japanese Food</h2>
                    <tr bgcolor="f1f1f1" style="color:#131212">
                        <th class="paddingN">Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                        <?php
                            include "conn.php";//add connection to the php page
                            $sql = "select * from japanese_food";//add a new sql query
                            $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
                            

                            //if got result, extract the data in $rows[] array (column by column)
                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td class='paddingN'>".$rows['food_name']."</td>";
                                echo "<td>".$rows['food_description']."</td>";
                                echo "<td>".$rows['food_price']."</td>";

                                //create 2 buttons (edit button and delte button in each row)
                                echo "<td><a href='editJapanese.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark ' style='color:#f1f1f1'>Edit</button></a></td>";
                                echo "<td><a href='deleteJapanese.php?id=".$rows['food_ID']."'><button  class='btn btn-outline-dark' style='color:#f1f1f1'>Delete</button></a></td>";
                                echo "</tr>";
                            }
                        ?>
                </table>
            
            </div>
            </div>
            
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>