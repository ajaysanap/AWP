<?php

session_start();

if($_SESSION)
{
if($_SESSION['temp']==1)
{
session_unset();

session_destroy();


include('head.html');
echo "Logout Sucessfull";
}

else
 {
     include('head.html');
    echo "already logout";
}    
}

else {
   // header("location:login.php");
    include('login.php');
    echo "please login first";
}