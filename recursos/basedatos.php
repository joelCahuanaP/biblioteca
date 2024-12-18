<?php
   include('../conexion/conexion.php');
   session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Base de Datos - UNFV</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
<link rel="stylesheet" href="../css/estilo-header.css">
 <link rel="stylesheet" href="../css/basedatos.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
  <style>

 </style>
 </head>
 
 <body bgcolor=white>
 
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
				    <li><a href="catalogo.php" target="_self">Catalogo en Linea</a></li>
					<li><a href="basedatos.php">Base de Datos</a></li>
				</ul></li>
			<li><a href="../recursos/repositorio.php">Repositorio Institucional</a></li>
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
		    <li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='reservar.php' >Reserva</a>";
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
      <p>|  BIBLIOTECA - BASE DE DATOS  |</p>
   </div> 
   
    <script src="../js/header-dibujo.js"></script>
</header>


<section class="contenedor-datos">
       <div class="datos" >
	       <div>
		       <h2>| BASES DE DATOS DE INVESTIGACI&Oacute;N</h2></br>
			   <p>Son selecciones de materiales acad&eacute;micos y cient&iacuteficos. Contienen principalmente artículos de revistas, libros, publicaciones, 
	               materiales audiovisuales, etc.</p></br>
		   </div>
		   <div>
		    <input type="text" name="buscador" id="buscador" placeholder="Buscar Base de Datos"/></br></br>	       
	           <center><select name="seleccione">
                           <option>BUSCAR EN TODAS LAS AREAS</option>
                           <option>Arquitectura e Ingenierias</option>
                           <option>Ciencias Administrativas</option>
                           <option>Ciencias Economicas</option>
	                       <option>Ciencias de la Salud</option>
	                       <option>Ciencias Sociales</option>
	                       <option>Derecho y Ciencias Politicas</option>
	                       <option>Humanidades</option>
                       </select></center>
	           Ordenar :<input type="radio" name="orden" value="a-z"/>A - Z
               <input type="radio" name="orden" value="z-a"/>Z - A</br></br>
			   
	           <hr align="center"/>
		   </div>
		     </br>
			 <!--Empezamos con las listas-->
			<ul id="listaArticulos">
			<li class="articulo">
			<div>
			    <h3>AgEcon Search</h3><br>
				<img src="../imagenes/ag2.png" alt="ag2" width="200"/>
				<p>Presenta los siguientes recursos: revistas científicas, documentos de conferencia, capítulos de libros, trabajos de discusión y tesis.<br>
				<b>Áreas:</b> Agricultura, ingeniería ambiental y ciencias económicas aplicadas</br>
                    <b>Idioma:</b> Inglés</br>
                    <b>Acceso:</b> Acceso libre</p></br>
			</div>
			<div>
				<a class="color" href="https://ageconsearch.umn.edu/" target="_blank">Acceder</a>
			</div>
			</li><br><br>
			
			<li class="articulo">
			<div>
			    <h3>ADEX Data Trade</h3><br>
				<img src="../imagenes/adex.jpg" alt="ag2" width="200"/>
				<p>Sistema de inteligencia comercial que brinda información de comercio exterior del Perú y del mundo. Información de reportes gráficos, 
	                     consultas estadísticas, estudios de mercado para la toma de decisiones de proyectos de investigación.</br></br>
				<b>Áreas:</b> Economía, Administración, Contabilidad, Negocios Internacionales, Comercio.</br>
                    <b>Idioma:</b> Español</br>
                    <b>Acceso:</b> Restringido. Solamente para los usuarios de la UNFV a través del Office 365.</p></br>
			</div>
			<div>
				<a class="color" href="https://www.adexdatatrade.com/Login.aspx?ReturnUrl=%2fMembers%2fDashboard.aspx" target="_blank">Acceder</a>
			</div>
			</li><br><br>
			<li class="articulo">
			<div>
			    <h3>ArchInform</h3><br>
				<img src="../imagenes/archinform.jpg" alt="ag2" width="200"/>
				<p>Esta base de datos surgió originalmente de los registros de proyectos de construcción de estudiantes de arquitectura y se ha 
	                   convertido en la base de datos en línea más grande sobre arquitectos e ingenieros </br></br>

                    <b>Áreas:</b> Arquitectura e ingeniería</br>
                    <b>Idioma:</b> Inglés y español</br>
                    <b>Acceso:</b> Acceso libre</p></br>
			</div>
			<div>
				<a class="color" href="https://spa.archinform.net/index.htm" target="_blank">Acceder</a>
			</div>
			</li><br><br>
			<li class="articulo">
			<div>
			    <h3>Agris FAO</h3><br>
				<img src="../imagenes/agris.png" alt="ag2" width="200"/>
				<p>Base de datos mundial que proporciona acceso a información relativa a la ciencia y la tecnología agrícola. 
	                   Tiene enlaces a texto completo de publicaciones, artículos de revistas, monografías, capítulos de libros, literatura gris, informes técnicos,
	                   tesis, disertaciones y conferencias.</br></br>

                    <b>Áreas:</b> Agricultura e ingeniería ambiental</br>
                    <b>Idioma:</b> Español e inglés
                    <b>Acceso:</b> Acceso libre</p></br>
			</div>
			<div>
				<a class="color" href="https://agris.fao.org/agris-search/index.do" target="_blank">Acceder</a>
			</div>
			</li><br><br>
			</ul>		
			</div>		
</section>
  
<script src="../js/basedatos.js"></script> 

<div>  

<footer>
      <?php include "../footer/footer.php"; ?>
        
    </footer>
	</div>

</body>
</html>