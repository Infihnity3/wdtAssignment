<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Login</h1>
    <form action="post" action="register.php">
    <tr>
        <th>
            Username:
        </th>
        <td>
            <input type="text" id="user" name="user" required>
        </td>
    </tr>
    <tr>
        <th>
            Password:
        </th>
        <td>
            <input type="password" id="pass" name="pass" required>
        </td>
    </tr>
   
    <tr>
        <th colspan="2">
            <br>
            <input type="submit" id="login" value="Login">
            <input type="reset" value="reset">
        </th>
    </tr>
    <?php
    session_start();
    include "conn.php";

    $username = mysqli_real_escape_string($conn,$_POST['user']);
    $password = mysqli_real_escape_string($conn,$_POST['pass']);

    $sql = "Select * from users where User_Name = '$username' and User_password = 'md5($password)'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) <= 0){
        //sql checking for the admin user
        $sql = "Select * from users where User_Name = '$username' and User_Password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) <= 0){
            echo "<script>alert('Wrong username or password! Please Try Again!');";
            die("window.history.go(-1);</script>");

        }
    }

    if($row = mysqli_fetch_array($result)){
        $_SESSION['user'] = $row['User_Name'];//use session
        $_SESSION['password'] = $row['User_Password'];
        $_SESSION['role'] = $row['User_Role'];
    }

    //check which homepage should it go (USER/ADMIN)
    if($_SESSION['role']==="1"){
        echo "<script>alert('Welcome back! ".$_SESSION['user']."');";
        echo "window.location.href='default.html';</script>";
    }    
    else if($_SESSION['role']===0){
        echo "<script>alert('Welcome back! admin');";
        echo "window.location.href='adminhomepage.html';</script>";
    }
?>
</form>
</body>
</html>