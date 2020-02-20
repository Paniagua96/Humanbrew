<?php
    $S_Name = "localhost";
    $S_userName = "root";
    $S_password = "";
    $S_dbName="humanbrew";

    //Make connection
    $conn = mysqli_connect($S_Name,$S_userName,$S_password,$S_dbName);
    //Check connection
    if(!$conn)
    {
        die("Connection Failed.".mysqli_connect_error());
    }else{
      // echo "Conection sucessfully"."<br>"."<br>";
    } 
?>