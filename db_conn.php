<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="dk";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn){
        die("connection failed ". mysqli_connect_error());
    }
    // echo "Connected successfully";
?>