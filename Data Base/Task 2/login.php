
<!-- <?php
session_start();
?> -->
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="form.css">
<title>First Form</title>
</head>

<?php


include("head.html");

?>
<br>
<body>
<fieldset >
<form action="CheckConnection.php" align=middle>
  <label class="cl">User Name:<label><br>
  <input type="text" name="uname"> 
<br>
 <label class="cl"> Password:</label><br>
  <input type="password" name="password" >
  <br><br>
  <input type="submit" value="Submit">
  <input type="reset">
  <a href="SignUp Form.html">
  Signup</a> 
</form>
</fieldset>

</body>
</html>