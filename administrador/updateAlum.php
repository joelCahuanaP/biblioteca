<?php

include("../conexion/conexion.php");

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['facultad'])
     && isset($_POST['usuario'])&& isset($_POST['contra']) && isset($_POST['correo']) && isset($_POST['telefono'])){


$consulta="UPDATE alumno 
		            SET
					Nombre='".$_POST['nombre']."',
					Apellido='".$_POST['apellido']."',
					Correo='".$_POST['correo']."',
					Facultad='".$_POST['facultad']."',
					Usuario='".$_POST['usuario']."',
					Contraseña='".$_POST['contra']."',
					Telefono='".$_POST['telefono']."'
					
					WHERE
					ID='".$_POST['idAlum']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		 header("location: usuarioAlum.php");


	 }

 
?>