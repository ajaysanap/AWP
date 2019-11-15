<!doctype html>

<html>
<head>
<title>Form to fill</title>
</head>

<?php
include("head.html");
?>

<body>
<form action="insert.php" method="post" required>
<pre>
Name:      <input type="text" name="name" pattern="[A-Za-z]{3,50}" required>
</br>
User Name: <input type="text" name="uname" pattern="[A-Za-z]{3,50}" required>
</br>
Age:       <input type="Number" name="age" min=18 max=100 required>
</br>
</br>
Password:  <input type="password" name="password"><br/>

<input type="submit" name="Submit" value="Sign up">  
</pre>
</form>

</body>
</html>
