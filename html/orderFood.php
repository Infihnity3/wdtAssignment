<?php



    include("conn.php");
   
        // $sql ="Select * from local_food,thai_food,japanese_food";
        // mysqli_query($conn,$sql);
    $food = $_POST['$rows['food_name']']   ; 

    $name = mysqli_real_escape_string($conn,$food);
    // $price = mysqli_real_escape_string($conn,$_POST['.$rows['food_price'].']);
        
    
   
    //step 3: create the SQL statement (since this is insert)
   
        $sql = "INSERT INTO orderFood (order_name) VALUES ('$name')";
        // mysqli_query($conn,$sql);
        echo $sql;
        // if(mysqli_query($conn, $sql)) {
        //     echo "<script>alert('Order successful'); window.location='home.php'</script>";
        // }else{
        //     die('Error :' . mysqli_error($conn));
        // }
        // mysqli_close($conn);
        
    

    ?>