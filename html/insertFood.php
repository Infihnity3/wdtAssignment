<?php


if(isset($_POST['insert'])) {
    include("conn.php");

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
if($check !== false)
{
echo "<script>alert('File is an image - " . $check["mime"] .".');</script>";
}
else
{
echo "<script>alert('File is not an image.Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" &&
$imageFileType != "jpeg" && $imageFileType != "gif" )
{
echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are
allowed.Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}

//move the file using move_uploaded_file function.
//If not success transfer, give alert message!
if (! move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
{
echo "<script>alert('Unable to upload photo.Thus, data will not be
inserted to database. Please try again!');</script>";
die("<script>window.history.go(-1);</script>");
}
    if(isset($_POST['submit'])){
    $selected_cui = $_POST['cuisines'];
   
    //step 3: create the SQL statement (since this is insert)
    if($selected_cui === "1"){
        $sql = "INSERT INTO local_food (food_name, food_price, food_description, food_img) VALUES ('$name','$price','$description','$target_file')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('The file was uploaded successful'); window.location='insertFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
    } else if($selected_cui === "2"){
        $sql = "INSERT INTO thai_food (food_name, food_price, food_description, food_img) VALUES ('$name','$price','$description','$target_file')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('The file was uploaded successful'); window.location='insertFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
    } else if($selected_cui === "3"){
        $sql = "INSERT INTO japanese_food (food_name, food_price, food_description, food_img) VALUES ('$name','$price','$description','$target_file')";
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('The file was uploaded successful'); window.location='insertFood.php'</script>";
        }else{
            die('Error :' . mysqli_error($conn));
        }
        mysqli_close($conn);
    } 
}
    ?>