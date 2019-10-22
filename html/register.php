<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
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
        <th>
            Confirm Password:
        </th>
        <td>
            <input type="password" name="confirmpass" id="confirmpass" required>
        </td>
    </tr>
    <tr>
        <th>
            Email Address:
        </th>
        <td>
            <input type="email" name="email" id="email" required>
        </td>
    </tr>
    <tr>
        <th colspan="2">
            <br>
            <input type="submit" id="register" value="Register as New User">
            <input type="reset" value="reset">
    <?php
    include "register.php";
    ?>
        </th>
    </tr>
    <?php
include "conn.php"; //connnection

//retrieve data from register.html
$username = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpass']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

if($password !== $confirmpassword)
{
echo "<script>alert('Password and confirmed password not same!'); ";
die("window.history.go(-1);</script>");
}

$sql = "Insert into users (user_name, user_password, user_email, user_last_login ) VALUES ('$username','".md5($password)."','$email','".date("Y-m-d H:i:s")."');";
mysqli_query($conn, $sql);

//echo $sql;
if(mysqli_affected_rows($conn)<=0)
{
echo "<script>alert('Unable to register ! \\nPlease Try Again!');";
die("window.history.go(-1);</script>");
}

echo "<script>alert('Register Successfully!Please login now!');";
echo "window.location.href='login.html';</script>";

?>
</form>
</body>
</html>