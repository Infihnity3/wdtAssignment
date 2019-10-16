<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Read Data from Database</title>
</head>

<body>
    <center>
        
        <h1>Search Page:</h1>
        <form method="post">
            <input type="text" name="search_key" placeholder="Please enter your keyword here!"/>
            <input type="submit" value="Search" /><br/><br/>
        </form>


        </table>
    </center>
<?php
include "conn.php";

$search_key = isset($_POST['search_key'])?
$_POST['search_key']:'';


$sql="SELECT* FROM contacts WHERE contact_name LIKE '%".$search_key. "%'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) <= 0){
    echo "<script>alert('No Result!');</script>";
}
else
{
    echo "<table width='90%'>";
    echo "<tr bgcolor='CC99FF'>";
    echo "<th>Name</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>Gender</th>";
    echo "<th>Relationship</th>";
    echo "<th>DOB</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
}

while($rows = mysqli_fetch_array($result)){
    echo "<tr>";
        echo "<td>".$rows['contact_name']."</td>";
        echo "<td>".$rows['contact_phone']."</td>";
        echo "<td>".$rows['contact_email']."</td>";
        echo "<td>".$rows['contact_address']."</td>";
        echo "<td>".$rows['contact_gender']."</td>";
        echo "<td>".$rows['contact_relationship']."</td>";
        echo "<td>".$rows['contact_dob']."</td>";
        //create 2 buttons (edit button and delte button in each row)
        echo "<td><a href='edit.php?id=".$rows['contact_id']."'><button>Edit</button></a></td>";
        echo "<td><a href='delete.php?id=".$rows['contact_id']."'><button>Delete</button></a></td>";
        echo "</tr>";
}

?>
</body>

</html>