<html>
<head><title>Display data</title>
</head>

<body>
    <?php
    include("connection.php");
    $i=$_REQUEST["details"];
    $sql="Select * from details where id=$i";

    $result = $conn->query($sql);
  // print_r($result);
   echo "</br>";

    /*print_r($result->fetch_assoc());
   echo "</br>";*/
   if($result->num_rows>=1)
   {
    while($r=$result->fetch_assoc())
    {
        echo "ID: ". $r['id'] ."  First Name: ". $r['First_Name'] ."  Last Name: ". $r['Last_Name'] ."  Age: ". $r['age']. " password: " .$r['Password']."";
        echo "</br>";
    }
   }
    echo "************************";
    $conn->close();
    ?>

    </body>
    </html>