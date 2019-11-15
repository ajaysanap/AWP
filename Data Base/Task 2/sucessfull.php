<html>
    <body>
<?php

session_start();

// $_SESSION['temp']=0;
$t=$_SESSION['temp'];
if($t==1)
{
    include("home.php");
?>
 <br>
 <font color="green" align=center>User is currently login</font>
    <br>
    <?php

  
}



?>
</body>
</html>
