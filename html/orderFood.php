<?php
    session_start();


    include "conn.php";
   
    $sql ="Select * from food";
    mysqli_query($conn,$sql);
    $food = $_POST['food_name']; 
    $food2 = $_POST['food_name2'];
    $food3 = $_POST['food_name3'];  
    $food_array = array($food,$food2,$food3);

    $name = mysqli_real_escape_string($conn,$food);
    // $price = mysqli_real_escape_string($conn,$_POST['.$rows['food_price'].']);
        
    
   
    //step 3: create the SQL statement (since this is insert)
    foreach($food_array as $items){
        $sql = 'INSERT INTO orderFood (food_ID, user_name) VALUES ("'.$items.'","'.$_SESSION["user"].'")';
        
        // echo $sql;
        if(mysqli_query($conn, $sql)) {
            //
        }else{
           // die('Error :' . mysqli_error($conn));
        }
        //mysqli_close($conn);
    }
    echo "<script>alert('Order successful'); window.location='home.php'</script>";

        
        
    

    ?>