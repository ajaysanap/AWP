 <!DOCTYPE html>
<html>
<head><title>Connection</title>
</head>

<body>

<?php

$servername="localhost";
$user="root";
$password="root";
$db="my_database";
$conn=new mysqli($servername,$user,$password,$db);

if($conn->connect_error)
{
    die("Connection failed ". $conn->connect_error);
}
?>
</body>
</html>