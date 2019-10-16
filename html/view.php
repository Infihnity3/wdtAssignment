<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Read Data from Database</title>
</head>

<body>

        
    <h1>Read Data from Database:</h1>
       
        <form action="search.php" method="post">
        <table border="1" style="text-align:center">
            <tr bgcolor="CC99FF">
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th><th>Address</th>
                <th>Gender</th><th>Relationship</th>
                <th>DOB</th><th>Edit</th>
                <th>Delete</th>
            </tr>
<?php
    include("conn.php");//add connection to the php page
    $sql = "select * from contacts";//add a new sql query
    $result = mysqli_query($conn, $sql);//run the sql query and all the data store in variable result
    
    if(mysqli_num_rows($result)<=0)//if no result, then run the die() code
    {
        die("<script>alert('No data from database!');</script>");
    }

    //if got result, extract the data in $rows[] array (column by column)
    while($rows = mysqli_fetch_array($result))
    {
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
        </table>



</body>

</html>