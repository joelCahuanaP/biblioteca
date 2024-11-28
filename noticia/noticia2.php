<?php 

 include("../conexion/conexion.php");
  session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Noticia unfv.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/estilo-noticias.css">
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
      <p>|  BIBLIOTECA  |</p>
   </div> 
   
  </header>
  
  <section class="seccion-noticia" >
     <div class="centro-noticia">
	    <h2>Rectora villarrealina participa en encuentro de universidades públicas</h2></br>
		
		<div id="img-noticia">
		<img src="../imagenes/noticia/noticia2.jpg" alt="noticia">
		</div></br>
		<p>Nuestra casa de estudios superiores, representada por su rectora, doctora Cristina Asunción Alzamora Rivero, participó el viernes
		4 de febrero en el Encuentro Nacional de Universidades Públicas 2022, en la sede de la Universidad Nacional Agraria La Molina (UNALM).</p>
		   
		<p>Dicha actividad se desarrolló con el objetivo de coordinar acciones conjuntas entre las universidades públicas del país para 
		analizar y presentar propuestas conjuntas ante el Poder Ejecutivo y el Congreso de la República, ante el debate en tales instancias,
		como el retorno a la semipresencialidad, los cambios a la Ley Universitaria, la autonomía universitaria y el ingreso libre a las 
		universidades.</p>
		
		<p>Asimismo, se analizó el presupuesto 2022, asignado a las universidades públicas, el cual  no refleja las reales necesidades, 
		omitiendo el aumento requerido a los docentes y el personal administrativo.</p>
		
		<p>La referida reunión fue organizada por los rectores de las universidades nacionales San Cristóbal de Huamanga, de Ayacucho; de San
		Agustín, de Arequipa, de Ingeniería y la UNALM, a la que se sumaron sus pares de Trujillo, La Libertad y del Altiplano, Puno.</P></br>
		
		<p>San Miguel, 4 de febrero de 2022.</p>
		
		
		
	 </div>
  </section>
  
  
  <footer>
       
        <?php include "../footer/footer.php"; ?>
        
    </footer>
  
  
   
</body>
</html>