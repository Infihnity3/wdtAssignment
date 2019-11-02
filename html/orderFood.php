<?php



    include("conn.php");


// "
//     $name = mysqli_real_escape_string($conn,);
//     $price = mysqli_real_escape_string($conn,$_POST['.$rows['food_price'].']);"

        $name='.$rows['food_name'].';
        $price='.$rows['food_price'].';
    


   
    //step 3: create the SQL statement (since this is insert)
   
        $sql = "INSERT INTO orderFood (order_name, order_price) VALUES ('$name','$price')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Order successful'); window.location='home.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
    

    ?>