<?php
include('Config.php');
session_start();
//if(!isset($_SESSION['Username'])) // if session status is none then start the session
//{	 
    //echo "<h1>Inicia sesion para continuar, redirigiendo a login...</h1>";
	 //header('Refresh: 1; URL=http://localhost/Login_html.php');
//}
    $sql = "SELECT * FROM employeeregistration";

     $result = mysqli_query($conn,$sql); 
     $id=$_GET["idEmployee"];

      while ($rows=mysqli_fetch_array($result)){ 
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		

    <title>Formulario</title>
</head>
    <body>	
        <div id="general">
                <form  method="post" action="EmployeeAccountInsert.php" enctype="multipart/form-data" ><?php } ?>
                    <div id="TituloFormulario"><h1>Alta cuenta del trabajador</h1></div>
                        <div id="formulario">
                            <table border=".5">
                                <tr><td><label >Empleado No.&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="id_employee" value="<?php echo $id?>" readonly ></div></td></tr>
                                <tr><td><label >CURP&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="Username"  required></div></td></tr>                
                                <tr><td><label >Contraseña&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="Password"  required></div></td></tr>
                                <tr><td><label >Repetir Contraseña&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="CheckPassword"  required></div></td></tr> 
                                <tr><td><label >Correo&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="Email"  required></div></td></tr> 
                        
                
                            </table>
                        </div>
                    <div id="BotonRegistrar"><button type="submit"   name="submit">Registrar</button></div>
                    
                </form>           
        </div>

    </body>
</html>