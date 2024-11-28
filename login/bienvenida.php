<?php
	   include("../conexion/conexion.php");
	   
	   if(mysqli_connect_errno()){
		   echo "Fallo al conectar con la base de datos";
		   exit();
	   }
	   
	   $nombre=$_POST['nombre'];
	   $apellido=$_POST['apellidos'];
	   $correo=$_POST['correo'];
	   $facultad=$_POST['facultad'];
	   $usuario=$_POST['usuario'];
	   $contra=$_POST['contra'];
	   $telefono=$_POST['telefono'];
	   
	   $consulta="INSERT INTO usuario(ID,Usuario,Contraseña) VALUES(null,'$usuario','$contra')";
	   $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");   
	   
	   
	   $consulta= "SELECT * FROM usuario WHERE Usuario='$usuario'";
       $resultado=mysqli_query($conexion,$consulta);
	   $fila = mysqli_fetch_array($resultado);
	   $idUser=$fila['ID'];
			
	   $consulta="INSERT INTO alumno(ID_Alumno,Nombre,Apellido,Facultad,Correo,Telefono,ID) VALUES(null,'$nombre',' $apellido','$facultad','$correo','$telefono',$idUser)";
	   $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");   
	   mysqli_close($conexion);
	?>


<!DOCTYPE html>
<html>

<head>
    <title>Libro de Reclamos - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilo-reclamos.css">
	
	<link rel="stylesheet" href="../css/estilo-confirmacion.css">
</head>

<body>
    <header>
  
   <div class="div-header">
     <img class="icono" src="../imagenes/logo.png" alt="logo"/>
     <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>
   
     <div class="sesion">
       <ul>
         <li><img class="icono" src="../imagenes/logo.png" alt="logo"/></li>
       </ul>
     </div>
   </div>
   
   
   <div class="div-saludo">
        <p>¡Bienvenido Usuario, <?php echo $_POST['usuario']?>!</p>
		<div class="datos-confirmar">
		<p>Datos Ingresados</p>
		    <?php
            						
			echo "<b>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;</b> ";echo $_POST['nombre'];
            echo "</br>";
			echo "<b>Correo :</b> ";echo $_POST['correo'];
			echo "</br>";

			if(isset($_POST['facultad'])){
				echo "<b>Facultad:&nbsp;&nbsp;&nbsp; </b>";echo $_POST['facultad'];
			    echo "</br>";
			}
			
			if(isset($_POST['dni'])){
				echo "<b>DNI:&nbsp;&nbsp;&nbsp; </b>";echo $_POST['dni']; 
				echo "</br>";
			}
			
			if(isset($_POST['procedente'])){
				echo "<b>Universidad Procedente: </b>";echo $_POST['procedente'];
				echo "</br>";
			}
			
			echo "<b>Usuario:&nbsp;&nbsp;&nbsp;</b> ";echo $_POST['usuario'];
            echo "</br></br> ";

			?>
			<div>
			<a href="../index.php"><input type="button" value="Confirmar" ></a>
			<a href="../login/loginalumno.php"><input type="button" value="Volver"></a>
			
			</div>
		</div>
   </div>
  </header>
  
  
</body>
</html>