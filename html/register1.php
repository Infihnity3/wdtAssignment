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
</form>
</body>
</html>