<?php

ob_start();
session_start();
include('Config.php');

    //Recover variables
    $Id=             $_POST['id_employee'];
    $Username =      $_POST['Username'];
    $Password =      $_POST['Password'];
    $CheckPassword = $_POST['CheckPassword'];
    $Email =         $_POST['Email'];



    //Query
    $sql = "INSERT INTO employeeaccount (
                                Id_employee,
                                Username,
                                Password,
                                CheckPassword,
                                Email                                
                                ) VALUES
                                ('$Id',
                                '$Username',
                                '$Password',
                                '$CheckPassword',
                                '$Email'                               
                                )";


    //Build query
    $result = mysqli_query($conn, $sql);

    //Codigo para probar errores, solo que duplica el Query
    
    //header('Refresh: 3; URL=h*/
  
?>
