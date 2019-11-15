<html>
    <body>
<?php

session_start();

$t=$_SESSION['temp'];
if($t==2)
{
    include("login.php");
?>
 <br>
 <font color="green" align=center>Please check your details</font>
    <br>
    <?php

  
}



?>
</body>
</html>
