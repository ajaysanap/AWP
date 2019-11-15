<html>
<head><title>Display data</title>
</head>

<body>
    <?php
session_start();

include("head.html");

if($_SESSION['temp']==1)
    {
    include("connection.php");

    $sql="Select * from student_details";

    $result = $conn->query($sql);
  // print_r($result);
   //echo "</br>";

    //print_r($result->fetch_assoc());
   //echo "</br>";
   if($result->num_rows>=1)
   {
    while($r=$result->fetch_assoc())
    {
        echo "ID: ". $r['id'] ."  First Name: ". $r['Name'] ."User name". $r['User_Name'] ."  Age: ". $r['age']. " password: " .$r['Password']."";
        echo "</br>";
    }
   }
    echo "************************";
    $conn->close();
}

else {
    header("location:login.php"); 
    }
    ?>

   
  </form>
    </body>
    </html>