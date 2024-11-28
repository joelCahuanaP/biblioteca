<?php 

include("../conexion/conexion.php");

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['dni']) && isset($_POST['universidad'])
     && isset($_POST['usuario'])&& isset($_POST['contra']) && isset($_POST['correo']) && isset($_POST['telefono'])){
		 
		 
	   $nombre=$_POST['nombre'];
	   $apellido=$_POST['apellido'];
	   $dni=$_POST['dni'];
	   $correo=$_POST['correo'];
	   $facultad=$_POST['universidad'];
	   $usuario=$_POST['usuario'];
	   $contra=$_POST['contra'];
	   $telefono=$_POST['telefono'];
	   
	   $consulta="INSERT INTO usuario(ID,Usuario,Contraseña) VALUES(null,'$usuario','$contra')";
	    $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");
	   
	    $consulta= "SELECT * FROM usuario WHERE Usuario='$usuario'";
        $resultado=mysqli_query($conexion,$consulta);
	    $fila = mysqli_fetch_array($resultado);
	    $idUser=$fila['ID'];
	   
	   
	   	   
	   $consulta="INSERT INTO externo(ID_Externo,Nombre,Apellido,DNI,Correo,universidad,Telefono,ID) VALUES(null,'$nombre',' $apellido','$dni','$correo','$universidad','$telefono',$idUser)";
	   $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");
	   
         header("location: formInsertarExterno.php");	 
	  
	  	 
	 }



?>