<?php

$servername="localhost";
$user="root";
$password="root";
$database="my_database";
$f=$_REQUEST['Name'];


$conn=new mysqli($servername,$user,$password,$database);

if($conn->connect_error)
{
    die("connection not set".$conn->connect_error);
}

$sql="select * from details where First_Name='$f'";

echo $f;
$result=$conn->query($sql);

if ($result->num_rows>=1)
	{
    while($row=$result->fetch_assoc()) 
		{
        echo "id: " . $row["id"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"];
		}
	}

 else {
    echo "0 results";
}


$conn->close();
?>


