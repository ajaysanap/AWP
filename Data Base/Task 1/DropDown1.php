
<html>
<head><title>Doopdown</title>
    </head>


    <body>

    <?php
    include("connection.php");
   // $i=$_REQUEST["details"];
    $sql="Select * from details";

    $result = $conn->query($sql);

   if($result->num_rows>=1)
   {
    echo  "<form action='DropDown.php' meathod='POST'>";
    echo "<select name='details'>";

    while($r=$result->fetch_assoc())
    {  
    echo  "<option value=".$r['id'].">". $r['First_Name']."</option>";
     }
     echo "</select>";
}
      echo   "<input type='submit' name='Submit'>";
        echo "</form>";
?>



    </body>
</html>