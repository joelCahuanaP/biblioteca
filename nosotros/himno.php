<?php
   include('../conexion/conexion.php');
   session_start();
  if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Himno Villarrealino - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
	<meta charset="UTF-8">
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
				    <li><a href="misionyvision.php">Mision-Vision</a></li>
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

    <div class="contenedorhimno">
        <div class="himno">
		     <div class="textohimno">
			     <div>
				     <h2>HIMNO VILLARREALINO</h2><br><br>
					 <h3>Coro</h3><br>
					 <p>Juventud estudiosa<br> 
					 Anhelante del saber<br> 
					 Alegre y bulliciosa<br> 
					 Llegarás a vencer (bis)
					 </p><br><br>
					 <h3>Estrofas</h3><br>
					 <p>Nuestras voces sean clarines<br> 
					 y nuestro canto sonoro<br><br>
					 Para que se oiga nuestro coro<br> 
					 En los últimos confines (bis)<br>
					 ¡Federico Villarreal!<br>
					 En honor a tu memoria<br>
					 Lucharemos con tesón,<br>
					 Con el alma y el corazón<br><br>
					 Hasta llegar a la gloria<br>
					 Con la fuerza de la razón (bis)<br>
					 </p><br><br>
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
	
	<footer>
        <?php include "../footer/footer.php"; ?>

    </footer>
	
</body>

</html>