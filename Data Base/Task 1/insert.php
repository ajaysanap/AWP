<html>
<head><title>Insert data</title>
</head>

<body>
    <?php
    include("connection.php");

    $stm=$conn->prepare("insert into details (First_Name,Last_Name,age,Password) values(?,?,?,?)");

    $stm->bind_param("ssis",$First,$Last,$a,$Pass);

    
    $First=$_REQUEST["fname"];
    $Last=$_REQUEST["lname"];
    $a=$_REQUEST["age"];
    $Pass=$_REQUEST["pass"];
    $stm->execute();
    echo "Data inserted";

    $stm->close();
    $conn->close();
  ?>  
    <form action="Display.php" method="post" required>
    <input type="submit" name="Submit" value="Display Table">
    </form>
    
</body>
</html>

