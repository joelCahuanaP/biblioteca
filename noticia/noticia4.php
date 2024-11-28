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
	    <h2>Inauguran Sala de audiencias de Facultad de Derecho y Ciencia Política</h2></br>
		
		<div id="img-noticia">
		<img src="../imagenes/noticia/noticia4.jpg" alt="noticia">
		</div></br>
		<p>La renovada Sala de Simulación de audiencias de la Facultad de Derecho y Ciencia Política (FDCP) villarrealina, ubicada en la 
		Sede Local 01 (SL01) - Local Central, fue inaugurada el lunes 31 de enero por nuestra rectora, doctora Cristina Asunción Alzamora
		Rivero.</p>
		   
		<p>El doctor Juan Abraham Ramos Suyo, decano de la FDCP, acompañó a la máxima autoridad de nuestra casa de estudios superiores; 
		así como los funcionarios, los docentes, el personal administrativo y un estudiante de la referida facultad.</p>
		
		<p>Durante el acto, el doctor Ramos Suyo agradeció la presencia de la rectora, ofreciendo el apoyo de su facultad a la gestión de
		las autoridades universitarias entrantes, para lograr metas y objetivos comunes, que permitan engrandecer a la institución.</p>
		
		<p>Asimismo, la doctora Alzamora Rivero felicitó a la Facultad de Derecho y Ciencia Política, la cual es emblemática de nuestra
		universidad y al realizar mejoras podrá brindar un servicio óptimo en la formación profesional de los estudiantes.</P>
		
		<p>Seguidamente, se procedió al corte de cinta bicolor, a la rotura de botella y la develación de la placa conmemorativa respectiva, 
		para declarar inaugurada la Sala de Simulación de Audiencias de la FDCP, ubicada en el primer piso del Pabellón A.</p>
		
		<p>La actividad también contó con las palabras del doctor Carlos Vicente Navas Rondón, director de la Unidad de Posgrado de la facultad; 
		del joven Paolo Yaques Vásquez, estudiante de sexto año de la Escuela Profesional de Derecho.</p>
		
		<p>Asimismo, el brindis de honor estuvo a cargo de la doctora Ibett Yuliana Rosas Díaz, jefa de la Oficina de Grados de la FDCP; y se contó 
		con la presencia del doctor Juan Carlos Jiménez Herrera, director del Departamento Académico de Ciencia Política.</p></br>
		
		<p>San Miguel, 31 de enero de 2022.</p>
	 </div>
  </section>
  
  
  <footer>
        <?php include "../footer/footer.php"; ?>
        
    </footer>
  
  
   
</body>
</html>