<?php


if(isset($_POST['insert'])) {
    include "conn.php";

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $foodI= $_FILES['image'];


    $target_dir = "foodImage/";
    //the basename($_FILES["photo"]["name"]) means to get the basename
    //(e.g. test.docx) from the file path (e.g. D://images/test.docx)
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    //to get the extension of the file (e.g. docx)
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check == true)
    {
       
        $allowed = array('jpg','png','jpeg','gif');

     if(!in_array($imageFileType, $allowed))
        {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are
            allowed.Please try again!');</script>";
            die("<script>window.history.go(-1);</script>");
        } 
     else{
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
        {
            echo "<script>alert('Unable to upload photo.Thus, data will not be
            inserted to database. Please try again!');</script>";
            die("<script>window.history.go(-1);</script>");
    }   
else{
    
    $selected_cui = $_POST['cuisines'];
    //step 3: create the SQL statement (since this is insert)
    if($selected_cui === "1"){
        $sql = "INSERT INTO food (food_name, food_price, food_description, food_img, food_type) VALUES ('$name','$price','$description','$target_file','local')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Insert successful'); window.location='addEditFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
    } else if($selected_cui === "2"){
        $sql = "INSERT INTO food (food_name, food_price, food_description, food_img, food_type) VALUES ('$name','$price','$description','$target_file','thai')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Insert successful'); window.location='addEditFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
    } else if($selected_cui === "3"){
        $sql = "INSERT INTO food (food_name, food_price, food_description, food_img, food_type) VALUES ('$name','$price','$description','$target_file','japanese')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Insert successful'); window.location='addEditFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
    } 

}
}
}
//move the file using move_uploaded_file function.
//If not success transfer, give alert message!

else
{
echo "<script>alert('File is not an image.Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}


}
?>