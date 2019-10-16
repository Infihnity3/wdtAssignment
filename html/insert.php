<?php


$name = $_POST['name'];
$phone = $_POST['phone_num'];
$email = $_POST['email_address'];
$address = $_POST['home_address'];
$gender = $_POST['gender'];
$relationship = $_POST['relationship'];
$dob = $_POST['dob'];


include "conn.php";

$sql =  "Insert into contacts (contact_name, contact_phone, contact_email, contact_address, contact_gender, contact_relationship, contact_dob) VALUES".
        "('$name','$phone','$email','$address','$gender','$relationship','$dob');";

mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn) <= 0){
    die("<script>alert('Insert Failed');</script>");
} else 
    echo "<script>alert('Successfully inserted!')</script>";

mysqli_close($conn);
?>