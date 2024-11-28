<?php

include("../conexion/conexion.php");

$_POST['nombre'];

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['universidad']) && isset($_POST['dni'])
     && isset($_POST['usuario'])&& isset($_POST['contra']) && isset($_POST['correo']) && isset($_POST['telefono'])){


$consulta="UPDATE externo 
		            SET
					Nombre='".$_POST['nombre']."',
					Apellido='".$_POST['apellido']."',
					DNI='".$_POST['dni']."',
					Correo='".$_POST['correo']."',
					Universidad='".$_POST['universidad']."',
					Usuario='".$_POST['usuario']."',
					Contraseña='".$_POST['contra']."',
					Telefono='".$_POST['telefono']."'
					
					WHERE
					ID='".$_REQUEST['idExterno']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		 header("location: usuarioExterno.php");


	 }

 
?>