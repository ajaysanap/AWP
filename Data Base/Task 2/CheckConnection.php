<html>
    <body>
        <?php
    session_start();
        include("connection.php");

        $uname=$_REQUEST["uname"];
        $password=$_REQUEST["password"];

        $sql="select * from student_details where User_Name='$uname' && Password='$password'";

      
        $result=$conn->query($sql);

       //       print_r($result);
        if($result->num_rows>0)
        {            
                $_SESSION['temp']=1;  
                header("location:sucessfull.php");  
                //$conn->close();
        }   
    else 
    {    
        $_SESSION['temp']=2;
        header("location:unsucessfull.php");
       // $conn->close();
                    
    }
         //   echo "Please check Details";
           // header('location:login.php');
           
        ?>
</body>
</html>
