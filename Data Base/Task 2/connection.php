<<!DOCTYPE html>
<html>

<body>

<?php
$servername="localhost";
$username="root";
$password="root";
$database="student_data";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
    die("connection not set".$conn->conect_error);
}


?>
</body>
</html>