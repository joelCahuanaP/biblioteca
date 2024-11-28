<?php
   include('../conexion/conexion.php');
   session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mision y Vision - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilo-header.css">
    <link rel="stylesheet" href="../css/nosotros.css">
	<link rel="stylesheet" href="../css/estilos-footer.css">
</head>

<body>

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
       <li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='../recursos/reservar.php' >Reserva</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "";
				  echo "</html>";
			  } ?></li>
	   
	   </ul>
     </div>
   </div>
   
   
   <div class="div-header menu">
   <nav class="navbar">
       <div class="enlaces">
	     <ul class="nav">
		    <li><a href="../index.php">Inicio</a></li>
			<li><a href="">Nosotros</a>
			    <ul>
				    <li><a href="">Mision-Vision</a></li>
					<li><a href="reseña.php">Historia</a></li>
					<li><a href="himno.php">Himno</a></li>
					<li><a href="personal.php">Personal</a></li>
				</ul></li>
			<li><a href="">Servicios en Linea</a>
			    <ul>
				    <li><a href="../recursos/catalogo.php" target="_self">Catalogo en Linea</a></li>
					<li><a href="../recursos/basedatos.php" target="_self">Base de Datos</a></li>
				</ul></li>
			<li><a href="../recursos/repositorio.php">Repositorio Institucional</a></li>
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
		 </ul>
	   </div> 
   </nav>
   </div>
   
  <div class="hero dibujo">
   
      <div class="mando-anterior diseño">
	  <input type="button" id="anterior" value="<<">
    </div>	
    <div class="mando-siguiente diseño">
	  <input type="button" id="siguiente" value=">>"></center>
	</div>
     <img id="imagen" src="../imagenes/libro1.jpg" />
  
  </div>   
   
  <div class="div-header letra">
      <p>|  NOSOTROS  |</p>
   </div> 
   
   <script src="../js/header-dibujo.js"></script>
</header>
	
	<div class="contenidoxd">
	     <div class="articulos">
		    <div class="secciones">
			     <div>
				     <h2>Misión</h2><br>
					 <p>"Brindar formación profesional científica y humanística a los
					 estudiantes, con sensibilidad social, innovación, competitividad
					 y emprendimiento, para contribuir al desarrollo y la sostenibilidad
					 sistémica del país."</p>
				 </div>
				 
			</div>
			<div class="secciones">
			     <div>
				     <h2>Visión</h2><br>
					 <p>"Comunidad académica posicionada entre las mejores universidades
					 en el ámbito nacional e internacional a través de la calidad, 
					 producción y difusión intelectual e innovación con responsabilidad 
					 social."</p>
				 </div>
			</div>
			<div class="secciones">
			     <div>
				     <h2>Objetivos</h2><br>
					 <ul>
					     <p>. Fortalecer la formación profesional de los estudiantes.</p>
						 <p>. Promover la investigación formativa, conocimiento científico y transferencia tecnológica en la comunidad.
						      &nbsp;&nbsp;universitaria.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						 <p>. Fortalecer la extensión cultural y proyección social para la comunidad.</p>
						 <p>. Mejorar la gestión institucional.</p>
						 <p>. Implementar la gestión de riesgo ante desastres. </p>
					 </ul>
				 </div>
			</div>
		 </div>
		 <div class="menu-secundario">
		 <h2>NUESTRA INSTITUCIÓN</h2>
		      <a href="misionyvision.php">Mision - Vision - Objetivos</a>
			  <a href="reseña.php">Reseña Historica</a>
			  <a href="himno.php">Himno Villarrealino</a>
			  <a href="personal.php">Personal Administrativo</a>
			 <center><img src="../imagenes/un2.jpg"></center>
		 </div>
		
	</div>
	
	<div>  
<footer>
       
  <?php include "../footer/footer.php"; ?>
        
</footer>
	</div>

	
	
</body>

</html>