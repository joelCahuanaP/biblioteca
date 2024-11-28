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
	    <h2>Avanzan acciones para licenciamiento de la carrera de Medicina</h2></br>
		
		<div id="img-noticia">
		<img src="../imagenes/noticia/noticia1.jpg" alt="noticia">
		</div></br>
		<p>El lunes 7 de febrero en el Anfiteatro de la Facultad de Medicina “Hipólito Unanue” (FMHU) se realizó una reunión en la que se 
		   analizaron diversos puntos a desarrollar para sustentar los indicadores para la obtención de licenciamiento del programa 
		   (carrera) de Medicina.</p>
		   
		<p>Dicha reunión fue presidida por la doctora Cristina Asunción Alzamora Rivero, rectora; acompañada por los doctores Américo 
		Francisco Leyva Rojas y Pedro Manuel Amaya Pingo, vicerrectores académico y de investigación, respectivamente.</p>
		
		<p>Asimismo, el decano de la FMHU, doctor Carlos Enrique Paz Soldán Oblitas, anfitrión de la reunión; y, como invitado, asistió el
		doctor Juan Arcadio Ávila López, decano de la Facultad de Ciencias Naturales y Matemática.</p>
		
		<p>La actividad contó con la participación de los funcionarios responsables de atender y gestionar las acciones correspondientes a
		cada uno de los indicadores que deben ser presentados ante la Superintendencia Nacional de Educación Superior Universitaria (Sunedu),
		acorde a la resolución de Consejo Directivo 097-2019-SUNEDU/CD, que aprueba el Modelo de licenciamiento del programa de pregrado de
		Medicina.</P>
		
		<p>Asistieron a la reunión, el magíster Milciades Roberto Esparza Silva, jefe de la Oficina Central de Calidad; el economista José
		Gualberto Condori Quispe, director general de la Dirección General de Administración; y el doctor Carlos Miguel Franco Del Carpio, 
		jefe de la Oficina Central de Tecnologías de la Información.</p>
		
		<p>Del mismo modo, participaron el arquitecto Eduardo De la Cruz Almeyda, jefe de la Oficina de Inversiones; y el licenciado Julio 
		Gregorio Talla Ramos, jefe de la Oficina de Abastecimientos y Servicios Generales; así como, personal de dichas oficinas y de la 
		facultad.</p>
		
		<p>De acuerdo al cronograma elaborado por la Sunedu, nuestra universidad debe presentar en el Grupo 10 de universidades, del 3 de 
		octubre al 3 de noviembre, la solicitud de licenciamiento cumpliendo las condiciones básicas de calidad establecidas.</p></br>
		
		<p>San Miguel, 7  de febrero de 2022.</p>
		
		
	 </div>
  </section>
  
  
  <footer>
        <?php include "../footer/footer.php"; ?> 
    </footer>
  
  
   
</body>
</html>