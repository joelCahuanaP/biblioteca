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
	    <h2>Nuestra universidad coordina con Ministerio de Educación recursos para mejoras institucionales</h2></br>
		
		<div id="img-noticia">
		<img src="../imagenes/noticia/noticia3.jpg" alt="noticia">
		</div></br>
		<p>Con el objetivo de realizar mejoras en la formación académica que permitan contribuir a la implementación de la Política Nacional 
		de Educación Superior y Técnico-Productiva (PNESTP), nuestra universidad ha presentado su expresión de interés ante la Dirección 
		General de Educación Superior (Digesu) del Ministerio de Educación (Minedu).</p>
		   
		<p>Las coordinaciones realizadas por nuestra universidad, que lidera la doctora Cristina Asunción Alzamora Rivero, rectora villarrealina, 
		nos permitirán desarrollar acciones en el marco del documento normativo Herramienta de incentivos para el logro de resultados en 
		universidades públicas en el marco de los objetivos prioritarios de la Política Nacional de Educación Superior y Técnico- Productiva para
		el ejercicio fiscal 2022, aprobado con resolución viceministerial 013-2022-MINEDU, del 28 de enero de 2022.</p>
		
		<p>Es así que esta casa de estudios superiores, a través de la Dirección General de Administración (DIGA), cuyo director general es el
		economista José Gualberto Condori Quispe, remitió el martes 1 de febrero el Borrador 1 de los Proyectos de mejora 2022 de la UNFV al Minedu,
		para su aprobación respectiva.</p>
		
		<p>Dicho documento fue elaborado luego establecerse los criterios solicitados, en sucesivas reuniones realizadas entre el Rectorado, el 
		Vicerrectorado Académico, que encabeza el doctor Américo Francisco Leyva Rojas, el Vicerrectorado de Investigación, a cargo del doctor Pedro
		Manuel Amaya Pingo; la Oficina Central de Gestión de las Tecnologías de Información, cuyo jefe es el doctor Carlos Miguel Franco Del Carpio y
		la DIGA.</P>
		
		<p>La Herramienta de incentivos es un mecanismo de financiamiento por resultados y desempeño, asignado desde el Ministerio de Educación en su
		rol rector del aseguramiento de la calidad de la educación superior universitaria, cuyo objetivo general es contribuir a la mejora de la 
		calidad del servicio educativo provisto por las universidades públicas licenciadas, generando incentivos para promover la implementación de
		acciones que conduzcan a cumplir los objetivos de la PNESTP.</p>
		
		<p>Como objetivos específicos se pretende impulsar la empleabilidad y la generación de conocimiento; fomentar la efectividad en los procesos de
		formación académica, generación de investigación, desarrollo e innovación; fomentar el adecuado proceso de apoyo y desarrollo a las/los 
		postulantes y estudiantes; y promover la adecuada gestión de la institución.</p>
		
		<p>Por ello, nuestra universidad debe cumplir con los compromisos, basados en metas por indicadores, en los dos tramos establecidos, de acuerdo 
		al eje central Empleabilidad, generación de conocimiento, desarrollo cultural e investigación; según sus cuatro dimensiones, Desarrollo e 
		innovación, Desarrollo de estudiantes, Formación integral y Gestión de la institución.</p></br>
		
		<p>San Miguel, 2 de febrero de 2022.</p>
		
		
	 </div>
  </section>
  
  
  <footer>
        <?php include "../footer/footer.php"; ?>
        
    </footer>
  
  
   
</body>
</html>