<<!DOCTYPE html>
<html>
<head><title> Create Table</title></head>
<body>
    
<?php
include("connection.php");
$sql="Create table details (id int Auto_increment Primary key, First_Name varchar(50) NOT NULL,Last_Name varchar(50) NOT NULL, age int NOT NULL,Password varchar(20) NOT NULL)";

if($conn->query($sql))
{
echo "Table created";
}

else
{
    echo "table not created";
}

?>
</body>
</html>