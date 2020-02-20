<?php

ob_start();
session_start();
include('Config.php');

    //Recover variables
    $Nombre1 = $_POST['Nombre1'];
    $Nombre2 = $_POST['Nombre2'];
    $ApellidoPaterno = $_POST['ApellidoPaterno'];
    $ApellidoMaterno = $_POST['ApellidoMaterno'];
    $CURP = $_POST['CURP'];
    $NSS = $_POST['NSS'];
    $FechaInicio = $_POST['FechaInicio'];
    $FechaFinal = $_POST['FechaFinal']; 
    $FechaNacimiento=$_POST['FechaNacimiento'];
    $LN_Ciudad  =$_POST['LN_Ciudad'];
    $LN_Estado  =$_POST['LN_Estado'];
    $LN_Pais  =$_POST['LN_Pais'];
    $D_Calle  =$_POST['D_Calle'];
    $D_NInterior  =$_POST['D_NInterior'];
    $D_NExterior  =$_POST['D_NExterior'];
    $D_Colonia  =$_POST['D_Colonia'];
    $D_CodigoPostal  =$_POST['D_CodigoPostal'];
    $D_Ciudad  =$_POST['D_Ciudad'];
    $D_Estado  =$_POST['D_Estado'];
    $D_Pais  =$_POST['D_Pais'];

   /* if( empty($_POST["FueDespedido"]) ) {
         $FechaFinal=null; 
         }
    else { 
        $FechaFinal = $_POST['FechaFinal']; 
    }   */

    //Query
    $sql = "INSERT INTO employeeregistration (
                                Nombre1,
                                Nombre2,
                                ApellidoPaterno,
                                ApellidoMaterno,
                                CURP,
                                NSS,
                                FechaInicio,
                                FechaFinal,                                
                                FechaNacimiento,
                                LN_Ciudad,
                                LN_Estado,
                                LN_Pais,
                                D_Calle,
                                D_NoInterior,
                                D_NoExterior,
                                D_Colonia,
                                D_CP,
                                D_Ciudad,
                                D_Estado,
                                D_Pais
                                ) VALUES
                                ('$Nombre1',
                                '$Nombre2',
                                '$ApellidoPaterno',
                                '$ApellidoMaterno',
                                '$CURP',
                                '$NSS',
                                '$FechaInicio',
                                '$FechaFinal',
                                '$FechaNacimiento',
                                '$LN_Ciudad',
                                '$LN_Estado',
                                '$LN_Pais',
                                '$D_Calle',
                                '$D_NInterior',
                                '$D_NExterior',
                                '$D_Colonia',
                                '$D_CodigoPostal',
                                '$D_Ciudad',
                                '$D_Estado',
                                '$D_Pais'
                                )";


    //Build query
    $result = mysqli_query($conn, $sql);

    /*if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/  //Codigo para probar errores, solo que duplica el Query
    
    //header('Refresh: 3; URL=http://localhost/FormularioFacturas_html.php');
  
?>
