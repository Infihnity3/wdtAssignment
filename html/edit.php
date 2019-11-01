<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit</title>
    <style>
        body{
            
            background: linear-gradient(45deg, rgba(255,229,180,1) 0%, rgba(193,154,107,1) 100%);
        }
        .edit{
            margin-top: 300px;

        }
    </style>
</head>
<?php
include "header.php";

?>
<?php
    //to get all the relevance info from the databasefor that specific item
    include "conn.php";
    $id = $_GET['id'];//edit.php?id=1
    $sql = "select * from users where user_ID = $id";
    $result = mysqli_query($conn, $sql);
    if($rows = mysqli_fetch_array($result)){
        $name = $rows['user_name'];
        $email = $rows['user_email'];
    }
    else {
        echo"<script>alert('No data from db! Technical errors!');</script>";
        die("<script>window.location.href='view.php';</script>");
    }


?>
<body>
    <div class="container-fluid">
        <div class="row edit">
            <div class="col-12">
                <h1>Edit Page: </h1>
                <form method="post" action="update.php">
                <table>
                <tr>
                    <th width="200px">ID:</th>
                    <td width="300px">
                    <input type="text" name="uid" value="<?php echo $id;?>" readonly/>
                    </td>
                </tr>
                <tr>
                    <th width="200px">Name:</th>
                    <td width="300px">
                    <input type="text" name="name" value="<?php echo $name;?>"
                    required="required"/>
                    </td>
                </tr>
                <tr>
                    <th width="200px">Email:</th>
                    <td width="300px">
                    <input type="text" name="email_address" value="<?php echo $email;?>"
                    required="required"/>
                    </td>
                </tr>
                
                <!--update and back button-->
                <tr><td colspan="2">
                <br/>

                <input type="submit" class='btn btn-outline-dark btn-reg' value="Update"/>
                <input type="submit" class='btn btn-outline-dark btn-reg' value="Back to Previous Page" formaction="admin.php"/>

                </td>
                </tr>
            </table>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
    