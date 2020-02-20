<?php
include('Config.php');
session_start();
//if(!isset($_SESSION['Username'])) // if session status is none then start the session
//{	 
    //echo "<h1>Inicia sesion para continuar, redirigiendo a login...</h1>";
	 //header('Refresh: 1; URL=http://localhost/Login_html.php');
//}
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
			<form method="post" action="EmployeeInsert.php" enctype="multipart/form-data" >
                <div id="TituloFormulario"><h1>Alta trabajador</h1></div>
                <div id="formulario">
                <table border=".5">
				<tr><td><label >Nombre1&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="Nombre1"  required></div></td></tr>                
                <tr><td><label >Nombre2&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="Nombre2"  ></div></td></tr>
                <tr><td><label >Apellido Paterno&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="ApellidoPaterno"  required></div></td></tr> 
                <tr><td><label >Apellido Materno&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="ApellidoMaterno"  required></div></td></tr> 
                <tr><td><label >CURP&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="18" name="CURP"  required></div></td></tr> 
                <tr><td><label >NSS&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="number" maxlength="11" name="NSS"  required></div></td></tr> 
                <tr><td><label >Fecha inicio&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="date" maxlength="100" name="FechaInicio"  required></div></td></tr> 
                <tr><td><label ><input type="checkbox" onclick="DisableDate()">Fecha final&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="date" id="FueDespedido" maxlength="100" name="FechaFinal"  disabled></div></td></tr> 
                <tr><td><label >Fecha nacimiento&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="date" maxlength="100" name="FechaNacimiento"  required></div></td></tr> 
                <tr><td>        Lugar nacimiento&nbsp;&nbsp;<div class="form-group mb-2"></td></tr> 
                <tr><td><label >Ciudad&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="LN_Ciudad"  required></div></td></tr> 
                <tr><td><label >Estado&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="LN_Estado"  required></div></td></tr> 
                <tr><td><label >País&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="LN_Pais"  required></div></td></tr> 
                <tr><td>        Domicilio&nbsp;&nbsp;<div class="form-group mb-2"></td></tr> 
                <tr><td><label >Calle&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_Calle"  required></div></td></tr> 
                <tr><td><label >No. Interior&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_NInterior"  required></div></td></tr> 
                <tr><td><label >No. Exterior&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_NExterior"  required></div></td></tr> 
                <tr><td><label >Colonia&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_Colonia"  required></div></td></tr> 
                <tr><td><label >Codigo postal&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="number" maxlength="100" name="D_CodigoPostal"  required></div></td></tr> 
                <tr><td><label >Ciudad&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_Ciudad"  required></div></td></tr> 
                <tr><td><label >Estado&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_Estado"  required></div></td></tr> 
                <tr><td><label >Pais&nbsp;&nbsp;</label></td><td><div class="form-group mb-2"><input type="text" maxlength="100" name="D_Pais"  required></div></td></tr> 
                  
               
            </table>
                    <div id="BotonRegistrar"><button type="submit"   name="submit">Registrar</button></div>
                </div>
            </form>
   
         
    </div>
    <script>
    function DisableDate()
    {
        document.getElementById("FueDespedido").disabled=
        !document.getElementById("FueDespedido").disabled;
    }</script>
</body>
</html>