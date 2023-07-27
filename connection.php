<?php

    $servername = "localhost";
    $username = "root";
    $password = "7789";
    $dbname = "responsiveform1";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
    	//echo "connection ok";
    }
    else
    {
    	"connection failed".mysqli_connect_error();
    }
?>