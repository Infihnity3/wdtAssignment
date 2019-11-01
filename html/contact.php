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
        .dash{
            margin-top: 15%;
        }
        .chg {
            width: 25%;
        }

    </style>
</head>

<?php
        include "header.php";
?>
<body>
    
    <div class="container-fluid dash">
        <div class="row">
            <div class="col-6">
          
                <h1>Contact Form:</h1>
                <br>
                <table border="1" style="table table-dark table-hover">
                            <tr bgcolor="f1f1f1">
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                            <?php
                            include "conn.php";//add connection to the php page
                            $sql = "select * from contact";//add a new sql query
                            $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
                            
                            if(mysqli_num_rows($result)<=0)//if no result, then run the die() code
                            {
                                die("<script>alert('No data from database!');</script>");
                            }

                            //if got result, extract the data in $rows[] array (column by column)
                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                            
                                echo "<td>".$rows['contact_email']."</td>";
                                echo "<td>".$rows['contact_message']."</td>";

                                echo "</tr>";
                            }
                        ?>


                </table>
               
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>