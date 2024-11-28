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
   <form action="#" method="post" >
         <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro"/>
         <input class="bus" type="submit" value="Buscar"/>
	  </form> 
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
	  
	      <p>Un modelo sistémico de simulación para evaluar el proceso de molienda clasificación directa y su impacto en la competitividad operativa de plantas concentradoras metalúrgicas</p></br>
          <p><b>Autor:</b> <?php echo $row['Autor']?> (Universidad Nacional Federico VillarrealPE, <?php echo $row['Año']?>)</p>
	      
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
	  
	      <p>Un modelo sistémico de simulación para evaluar el proceso de molienda clasificación directa y su impacto en la competitividad operativa de plantas concentradoras metalúrgicas</p></br>
          <p><b>Autor:</b> <?php echo $row['Nombre']?> (Universidad Nacional Federico VillarrealPE, <?php echo $row['Año']?>)</p>
	      
		  <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver libro</font></a>"?>
	      <a href="http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/3739/CARHUAZ%20RIVERA%20ZILA%20MISRAIM%20-%20MAESTRIA.pdf?sequence=1&isAllowed=y" target="_blank"><font color=#873600 >Ver tesis</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
	  
	      <p>Trabajo académico para optar el título de segunda especialidad en informática educativa y nuevas tecnologías ﻿</p></br>
          <p><b>Autor:</b>Asencios Carranza,Héctor Celso(Universidad Nacional Federico VillarrealPE,2018)</p>
          <p>En el distrito de Comas se desarrolla un CETPRO donde personas sin distingo de género y edad tienen acceso a un Centro de Educación Técnico Productiva; como profesor de dicho centro me preocupó la ausencia de alumnos aun ...</p>
	      <a href="http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/2325/Asencios%20Carranza%20Hector%20Celso.pdf?sequence=1&isAllowed=y" target="_blank"><font color=#873600 >Ver tesis</font></a></br>
	  </div>
  </div>
  </li>
  </ul>
  <!--Tercer tesis-->
</div>
  
 </section>
</div>

<script src="../js/libros.js"></script> 

<footer>
       
       <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>