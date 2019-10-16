<?php
//first: connect to db
include "conn.php";

//second?
$id = $_GET['id'];

//create sql
$sql="DELETE FROM contacts WHERE contact_id=$id";
mysqli_query($conn, $sql);

//if necessary deleted...then
if(mysqli_affected_rows($conn)<=0)
{
    echo "<script>alert('Data deleted!');</script>";
    die ("window.location.href='view.php';</script>");
}

//successfully deleted then...
echo "<script>alert('Data deleted!');</script>";
echo "<script>window.location.href='view.php';</script>";

?>