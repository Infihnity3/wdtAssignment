<?php
    include "conn.php"; //connection
  
    //retrieve data from the top
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

 

    // if(isset($email === "select * from user where user_email"))

    //insert the data into the database
    $sql = "Insert into contact (contact_email, contact_message) values ('$email', '$message');";

    // echo $sql;
    //if connection with Db failed then unable to message, else message sent successfully
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)<=0){
        echo "<script>alert('Unable to send ! \\nPlease Try Again!');";
        die("window.history.go(-1);</script>");
    }else{
         echo "<script>alert('Message Sent!');";
        echo "window.location.href='home.php  ';</script>";
    }
    
   
?>