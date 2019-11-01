<?php
    include "conn.php";

    $fid = $_POST['food_ID'];
    $name = $_POST['food_name'];
    $description = $_POST['food_description'];
    $price = $_POST['food_price'];

    $sql = "Update local_food SET food_name = '$name',food_description = '$description', food_price = '$price' Where food_ID = $fid";
    // echo $sql;
    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) <= 0){
        die("<script>alert('Cannot update data!');</script>");
        echo "<script>window.location.href='editLocal.php?id=$uid';</script>";
    }

    echo "<script>alert('Update Data Successfully!');</script>";
    echo "<script>window.location.href='editLocal.php?id=$uid';</script>";
?>