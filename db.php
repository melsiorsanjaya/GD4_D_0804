<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "12345";
    $name = "GD4_D_0804";

    $con = mysqli_connect($host,$user,$pass,$name);


    if(mysqli_connect_errno()){
     
        echo "Failed to connect : " . mysqli_connect_error();
   }

?>
