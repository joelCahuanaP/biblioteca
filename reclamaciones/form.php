<?php 

 include("../conexion/conexion.php");

    if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
  
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
	<link rel="stylesheet" href="../css/estilo-form.css">
</head>

<body bgcolor=white>

 <header>
  
   <div class="div-header">
     <img class="icono" src="../imagenes/logo.png" alt="logo"/>
     <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>
   
     <div class="sesion">
        <ul>
         <li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='../login/salir.php' >Cerrar Sesion</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "<a class='boton' href='../login/menuregistro.php' >Iniciar Sesion</a>";
				  echo "</html>";
			  }  ?></li>
		 <li><?php if(isset($texto)) {echo $texto;} ?></li>
       </ul>
     </div>
   </div>
   
   
   <div class="div-saludo">
        <p>Hola,<b> <?php echo $_POST['nombre'];echo "&nbsp;"; echo $_POST['paterno']; echo "&nbsp;";echo $_POST['materno']?></b></br>
		su queja o reclamo ha sido enviado correctamente, espere nuestro correo de respuesta a su correo <?php echo $_POST['correo'];?>.</p>
   </div>
  </header>
  
  <section>
  <div class="datos">
    <h2>Datos Ingresados</h2>
	<div>
	<?php 
	  
      echo "<b>Apellido Paterno:</b> ";echo $_POST['paterno'];
	  echo "</br>";
	  echo "<b>Apellido Materno:</b> ";echo $_POST['materno'];
	  echo "</br>";
	  echo "<b>Direccion:</b> ";echo $_POST['direccion'];
	  echo "</br>";
	  echo "<b>Correo:</b> ";echo $_POST['correo'];
	  echo "</br>";
	  echo "<b>Distrito:</b> ";echo $_POST['distrito'];
	  echo "</br>";
	  echo "<b>telefono:</b> ";echo $_POST['telefono'];
	  echo "</br>";
	  echo "<b>Detalles:</b> ";echo $_POST['message'];

	?>
	</br></br>
	<a href="../index.php">continuar</a>
	</div>
  </div>
  </section>
  
</body>

</html>