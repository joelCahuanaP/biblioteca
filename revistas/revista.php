<?php
   include('../conexion/conexion.php');
   session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>


<!DOCTYPE html>
<html>
<head>
 <title>Revistas unfv.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/revistas.css">
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
      <p>|  BIBLIOTECA - Revistas Científicas  |</p>
   </div> 
 </header>  
  
 
  <section class="seccion-revista" >
  <div class="lista-revistas">
  <div>
  <ul id="listaArticulos">
  <li class="articulo">
    <div class="rev">
	   <div>
	       <img src="../imagenes/revistas/alicia.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-revista">
		   <a href="https://alicia.concytec.gob.pe/" target="_blank">Alicia</a>
	   </div>
	</div>
	<li>
	<li class="articulo">
	<div class="rev">
	    <div>
	       <img src="../imagenes/revistas/scielo.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-revista">
		   <a href="https://scielo.org/es/revistas/listar-por-tema" target="_blank">Scielo</a>
	   </div>
	</div>
	</li>
	</ul>
  </div> 
   <div>
   <ul id="listaArticulos">
   <li class="articulo">
   <div class="rev">
	   <div>
	       <img src="../imagenes/revistas/world.png" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-revista">
		   <a href="https://worldwidescience.org/" target="_blank">World Wide Science</a>
	   </div>
	</div>
	</li>
	<li class="articulo">
	 <div class="rev">
	   <div>
	       <img src="../imagenes/revistas/redalyc.png" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-revista">
		   <a href="https://www.redalyc.org/" target="_blank">Redalyc</a>
	   </div>
	</div>
	</li>
	</ul>
	</div> 
 </div>
 
 <aside>
        <div class="buscador-revista">
		  <div>
		    <p>BUSCADOR</p>
          </div>		  
		   <input type="text" name="buscador" id="buscador" placeholder="Buscar..."/>
		</div>
		<div class="buscador-dibujo">
		   <img src="../imagenes/investigacion.png" alt="inv"/>
		</div>
  </aside>
 
  </section>
  
  <footer>
       
      <?php include "../footer/footer.php"; ?>
        
    </footer>
	<script src="../js/revista.js"></script> 
</body>
</html>