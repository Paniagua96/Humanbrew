<?php
include('Config.php');
session_start();
if(!isset($_SESSION['Username'])) // if session status is none then start the session
{	 
   // echo "<h1>Inicia sesion para continuar, redirigiendo a login...</h1>";
	 //header('Refresh: 1; URL=');
}

     $sql = "SELECT * FROM employeeregistration";

     $result = mysqli_query($conn,$sql);    
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Reporte trabajadores</title>
</head>
<body>				
    <form ><div id="general">
        <div id="TituloConsulta"><h1>Reporte trabajadores</h1></div> 
        <div  id="Consulta">        
            <table  align="center" class="table" border="1 " style="width:100%">
          
                <tr align="center">
                   
                    <th><div class="col">Nombre1</div></th>
                    <th><div class="col">Nombre2</div></th>
                    <th><div class="col">Apellido Paterno</div></th>
                    <th><div class="col">CURP</div></th>
                    <th><div class="col">NSS</div></th>
                    <th><div class="col">Fecha inicio</div></th>
                    <th><div class="col">Fecha final</div></th>
                    <th><div class="col">Fecha Nacimiento</div></th>
                    <th><div class="col">Crear Cuenta</div></th>
                    <th><div class="col">Editar</div></th>
                    <th><div class="col">Borrar</div></th>
                    </div>
                </tr>
                        </thead>
                            <?php while ($rows=mysqli_fetch_array($result)){ ?>
                    <tr align="center"> 
                        <td><div class="col"><?php echo $rows["Nombre1"];?></div></td>         
                        <td><div class="col"><?php echo $rows["Nombre2"];?></div></td>       
                        <td><div class="col"><?php echo $rows["ApellidoPaterno"];?></div></td>
                        <td><div class="col"><?php echo $rows["ApellidoMaterno"];?></div></td>
                        <td><div class="col"><?php echo $rows["CURP"];?></div></td> 
                        <td><div class="col"><?php echo $rows["NSS"];?></div></td>  
                        <td><div class="col"><?php echo $rows["FechaInicio"];?></div></td> 
                        <td><div class="col"><?php echo $rows["FechaFinal"];?></div></td>
                        <td><div class="col"><a href="EmployeeAccount.php?idEmployee=<?php echo $rows['Id_employee'];?>"> + </div></td>
                        <td><div class="col"><a href="ModificacionRegistroFacturas_html.php?idEmployee=<?php echo $rows['Id_employee'];?>" >Editar Registro</div></td>
                        <td><div class="col"><a href="BorrarRegistroFacturas.php?idEmployee=<?php echo $rows['Id_employee'];?>"> Borrar Registro</div></td>
                        
                    </tr>
                         <?php } ?>
                         </div>
            </table>
                   
               
                   
                <div id="RegresarIndice"><a href="">Regresar a menu</a>

    </div>
</body>
</html>