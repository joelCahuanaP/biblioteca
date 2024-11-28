<?php
   include('../conexion/conexion.php');
   session_start();
    if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>



<!DOCTYPE html>
<html>
<head>
 <title>Repositorio Institucional - UNFV</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/tesis2.css">
 <link rel="stylesheet" href="../css/libros-sistema.css">
 <link rel="stylesheet" href="../css/estilo-tesis.css">
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
				    <li><a href="../nosotros/misionyvision.php">Mision-Vision</a></li>
					<li><a href="../nosotros/reseña.php">Historia</a></li>
					<li><a href="../nosotros/himno.php">Himno</a></li>
					<li><a href="../nosotros/personal.php">Personal</a></li>
				</ul></li>
			<li><a href="">Servicios en Linea</a>
			    <ul>
				    <li><a href="../recursos/catalogo.php" target="_self">Catalogo en Linea</a></li>
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
		 </ul>
	   </div> 
   </nav>
   </div>
   
  <div class="div-header letra">
      <p>| Repositorio Institucional  |</p>
   </div>  
</header>

<div class="abc">
 
 
 <aside class="repertorio-tesis">
  <div class="aside-titulo">
         <p><b>Listar</b></p>
  </div>
  
  <div class="aside-contenedor2"> 
      <div class="aside-listar">
		<button name="button" class="btn-listar btncolor">Por fecha de publicación</button></br>
		<button name="button" class="btn-listar btncolor">Autores</button></br>
		<button name="button" class="btn-listar btncolor">Título</button>
      </div>
  </div>
  
   <div class="aside-titulo">
          <p><b>Tesis grados-titulos</b></p>
  </div>
     
  <div class="aside-contenedor2"> 
      <div class="aside-listar">
		<button name="button" class="btn-listar btncolor">Titulo profecional</button></br>
		<button name="button" class="btn-listar btncolor">Doctorado</button></br>
		<button name="button" class="btn-listar btncolor">Maestria</button>
      </div>
  </div>
  
</aside>  
 
 
 
<section class="contenedor">
 <div class="contenedor2">
   <div>
      Buscar
   </div>
   <div>
     <select name="seleccione">
       <option>Titulo</option>
       <option>Autor</option>
       <option>Tema</option>
     </select>
   </div>
   <div class="barratext">
   <input type="text" name="buscador" id="buscador" placeholder="Buscar tesis"/>
   </div>
   
   
</div>

<div class="recomendado">
  <p>| TESIS</p>
  <!--Primer tesis-->
  
  <?php 
   if(isset($_POST['buscador'])==null){
  $consulta= "SELECT * FROM tesis";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){	  
  ?>
  
  <ul id="listaArticulos">
  <li class="articulo">
  <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/tesis2.png" alt="tesis"/>
      </div>	   
	  <div class="libro-detalles">
	  
	      <p><b>Implementación de un sistema de gestión de seguridad y salud en el trabajo para mejorar la gestión en una empresa de servicios de publicidad</b></p></br>
          <p><b>Autor:</b><?php echo $row['Autor']?>(Universidad Nacional Federico VillarrealPE,<?php echo $row['Año']?>)</p>
          </br></br>
		   <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver Tesis</font></a>"?>
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
	  </div>
  </div>
  </li>
  </ul>
  <?php }}else{ include("buscarTesis.php");
			  
			  if(isset($resultado2)!=null){
			  while($row=mysqli_fetch_array($resultado2)){?>
  <ul id="listaArticulos">
  <li class="articulo">
  <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/tesis2.png" alt="tesis"/>
      </div>	   
	  <div class="libro-detalles">
	  
	      <p><b>Implementación de un sistema de gestión de seguridad y salud en el trabajo para mejorar la gestión en una empresa de servicios de publicidad</b></p></br>
          <p><b>Autor:</b><?php echo $row['Autor']?>(Universidad Nacional Federico VillarrealPE,<?php echo $row['Año']?>)</p>
          </br></br>
		   <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver Tesis</font></a>"?>
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
	  </div>
  </div>
  </li>
  </ul>
  
  <?php }}else{echo "<h3>No se han encontrado registro de la busqueda</h3>";}}?>
  <!--Segundo tesis-->
  <ul id="listaArticulos">
  <li class="articulo">
    <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/tesis2.png" alt="tesis"/>
      </div>	   
	  <div class="libro-detalles">
	  
	      <p><b>Elaboración de un plan de mantenimiento preventivo en los puentes de abordaje para pasajeros en la compañía American Airlines Boston, 2019 ﻿</b></p></br>
          <p><b>Autor:</b>Del Águila Torres,Wilbert Alfonso(Universidad Nacional Federico VillarrealPE,2019)</p>
          <p>El presente trabajo de investigación, realizado bajo la modalidad de informe por experiencia profesional, titulado “Elaboración de un plan de mantenimiento preventivo en los puentes de abordaje de pasajeros en la compañía ...</p>
	      <a href="../pdf/estadistica.pdf" target="_blank"><font color=#873600 >Ver Tesis</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   
	  </div>
  </div>
  </li>
  </ul>
  <!--Tercer tesis-->
  <ul id="listaArticulos">
  <li class="articulo">
    <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/tesis2.png" alt="tesis" />
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4>INTRODUCCION A LA PROBABILIDAD Y ESTADISTICA</h4></br>
          <p><b>Autor:</b> Mendenhall - Beaver - Beaver</p>
          <p><b>Edición:</b> Decimo tercera</p>
	      <p><b>Codigo:</b> 1b44</p></br>
	      <a href="../pdf/probabilidad.pdf" target="_blank"><font color=#873600 >Ver libro</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="../reserva/reservar.php" target="contenido2">Reservar</a></br></br></br>
	  </div>
  </div>
   </li>
  </ul>
</div>
  
 </section>
</div>

<script src="../js/libros.js"></script> 

<footer>
       
      <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>