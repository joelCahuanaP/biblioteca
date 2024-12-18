<?php
   include('../conexion/conexion.php');
   session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>

<!DOCTYPE html> 
<html lang="es"> <!-- Asignamos idioma español -->
<head> <!-- Abrimos el head  -->
    <meta charset="UTF-8"> <!-- Especifica la codificaciones de caracteres -->
    <title>Menu Login - UNFV</title> <!-- Titulo de la pagina -->
    <link rel="stylesheet" href="../css/menuregistro.css">
	<link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilos-footer.css">  <!-- Llamamos al estilos.css -->
</head> <!-- Cerramos el head -->
<body> <!-- Abrimos el body -->
 
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
   
   
   <div class="div-header menu">
   <nav>
       <div class="enlaces">
	     <ul class="nav">
		    <li><a href="../index.php">Inicio</a></li>
			<li><a href="">Nosotros</a>
			    <ul>
				    <li><a href="../nosotros/misionyvision.php">Mision-Vision</a></li>
					<li><a href="../nosotros/reseña.php">Historia</a></li>
					<li><a href="../nosotros/himno.php">Himno</a></li>
					<li><a href="../nosotros/personal.php">Personal</a></li>
				</ul></li>
			<li><a href="">Servicios en Linea</a>
			    <ul>
				    <li><a href="../recursos/catalogo.php">Catalogo en Linea</a></li>
					<li><a href="../recursos/basedatos.php">Base de Datos</a></li>
				</ul></li>
			<li><a href="../recursos/repositorio.php">Repositorio Institucional</a></li>
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
			<li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='../recursos/reservar.php' >Reserva</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "";
				  echo "</html>";
			  } ?></li>
			<li><a href="../login/loginAdmi.php">Iniciar Sesion Como Administrador</a></li>
		 </ul>
	   </div> 
   </nav>
   </div>

   
</header>
 
	 
       <div class="menulogin"> 
       <div class="container"> 
        <div class="contenedor-regis"> 
            <h2>01</h2> 
            <h3>Alumno</h3><br> 
			
            <img class="registros"src="../imagenes/alumnologin.png" alt=""> <!-- Asignamos una imagen con su ruta respectiva -->			
            <br><br> 
            <a href="loginalumno.php">Iniciar Sesion</a>
        </div> 
        <div class="contenedor-regis"> 
            <h2>02</h2> 
            <h3>Docente</h3><br> 
			
            <img class="registros"src="../imagenes/docentelogin.png" alt="">
            <br><br> 
            <a href="logindocente.php">Iniciar Sesion</a>
        </div> 
        <div class="contenedor-regis">
            <h2>03</h2> 
            <h3>Usuarios Externos</h3><br> 
			
            <img class="registros"src="../imagenes/externologin.png" alt="">
            <br><br> 
            <a href="loginexterno.php">Iniciar Sesion</a>
        </div> 
        
    </div> 
</div> 
    <br><br><br><br><br><br><br><br>
	
    <footer>
       <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>