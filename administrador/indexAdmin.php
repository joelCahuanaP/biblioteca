<?php
   include('../conexion/conexion.php');
   session_start();
   
   if(isset($_SESSION["id4"])){
	     
        $user = $_SESSION["id4"];
   
        $consulta= "SELECT Nombre, Apellido, Codigo FROM administrador WHERE Codigo = '$user'";
        $resultado= mysqli_query($conexion,$consulta);
   
        $fila = mysqli_fetch_array($resultado);

        $nombre = $fila['Nombre'];
        $apellidos = $fila['Apellido'];
        $uss  = $fila['Codigo'];
   
        $texto = " | " ."Usuario: " .$uss;
		$_SESSION['tex']=$texto;
   }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
	<meta charset="UTF-8">
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilo-header.css">
	<link rel="stylesheet" href="../css/estilo-inicio.css">
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
   
   <div class="hero dibujo">
   
      <div class="mando-anterior diseño">
	  <input type="button" id="anterior" value="<<">
    </div>	
    <div class="mando-siguiente diseño">
	  <input type="button" id="siguiente" value=">>"></center>
	</div>
     <img id="imagen" src="../imagenes/portAdmin.jpg" />
  
  </div>   
  
   <div class="div-header menu">
   <nav class="navbar">
       <div class="enlaces">
	     <ul class="nav">
		    <li><a href="indexAdmin.php">Inicio</a></li>
			
            <li><a href="">Transacciones</a>
			    <ul>
				    <li><a href="reservasAdmin.php">Reservas</a></li>
					<li><a href="librosPrestados.php">Libros Prestados</a></li>
				</ul></li>			
			<li><a href="libros.php">Libros</a></li>
			<li><a href="">Usuarios</a>
			    <ul>
				    <li><a href="usuarioAlum.php">Alumnos</a></li>
					<li><a href="usuarioDocente.php">Docentes</a></li>
					<li><a href="usuarioExterno.php">Externos</a></li>			
				</ul></li>		 
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
		 </ul>
	   </div> 
   </nav>
   </div>
      
  <div class="div-header letra">
      <p>|  NOSOTROS  |</p>
   </div> 
   
   <script src="../js/header-dibujo.js"></script> 
</header>
<div class="noticias">
<section class="contenido" >
   <p><b>|  NOTICIAS </b></p>
   
   <div class="lista-noticias">
  <div>
    <div class="noti">
	   <div>
	       <img src="../imagenes/noticia/noticia1.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="../noticia/noticia1.php" target="_blank">Avanzan acciones para licenciamiento de la carrera de Medicina</a>
	   </div>
	</div>
	
	<div class="noti">
	    <div>
	       <img src="../imagenes/noticia/noticia2.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="../noticia/noticia2.php" target="_blank">Rectora villarrealina participa en encuentro de universidades públicas</a>
	   </div>
	</div>
  </div>
  <div>
   <div class="noti">
	   <div>
	       <img src="../imagenes/noticia/noticia3.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="../noticia/noticia3.php" target="_blank">Se coordina con Ministerio de Educación recursos para mejoras institucionales</a>
	   </div>
	</div>
	
	 <div class="noti">
	   <div>
	       <img src="../imagenes/noticia/noticia4.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="../noticia/noticia4.php" target="_blank">Inauguran Sala de audiencias de Facultad de Derecho y Ciencia Política</a>
	   </div>
	</div>
	</div>
 </div>
   
</section>
  
<aside class="aside-apa">
  <div class="apa">
    <p>Citas y Referencias en APA</p>
  </div>
  <div class="dibujoapa">
    <a href="../libros-pdf/apa.pdf" target="_blank"><img src="../imagenes/apa.jpg"></a>
  </div></br></br>
  
  
   <div class="tutorial-titulo">
    <p>Tutorial</p>
  </div>
  <div class="tutorial-dibujo">
    <a href="../manual/manual.pdf" target="_blank"> <img src="../imagenes/manual.png"></a>
  </div>    
  
</aside>
</div>









   <footer>
        <?php include "../footer/footer.php"; ?>

   </footer>


</body>
</html>