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
 <link rel="stylesheet" href="../css/estilo-clasificacion.css">
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
				    <li><a href="catalogo.php" target="_self">Catalogo en Linea</a></li>
					<li><a href="../recursos/basedatos.php">Base de Datos</a></li>
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
    
   
  <div class="div-header letra">
      <p>|  BIBLIOTECA - REPOSITORIO INSTITUCIONAL  |</p>
   </div> 
   
  </header>
  <section class="clasificacion-libro" >
     <div class="centro">
	     <table class="tabla" border="2"  cellspacing="0">
            <tr> 
                <td>
				    <a href="../tesis/tesis-sistemas.php" target="_self"><img class="img-libros" src="../imagenes/tesis.png" alt="tesis"/></a>
				    <div class="escuela"><a href="" target="_blank">Ingenieria de Sistemas</a></div></td>
				<td>
				    <a href="../tesis/tesis-industrial.php" target="_self"><img class="img-libros" src="../imagenes/tesis.png" alt="tesis"/></a>
				    <div class="escuela"><a href="" target="_blank">Ingenieria Industrial</a></div></td>
				
            </tr>
            <tr>
               <td>
			       <a href="../tesis/tesis-agroindustrial.php" target="_self"><img class="img-libros" src="../imagenes/tesis.png" alt="tesis"/></a>
			       <div class="escuela"><a href="" target="_blank">Ingenieria Agroindustrial</a></div></td>
			   <td>
			        <a href="../tesis/tesis-transporte.php" target="_self"><img class="img-libros" src="../imagenes/tesis.png" alt="tesis"/></a>
			       <div class="escuela"><a href="" target="_blank">Ingenieria de transporte</a></div></td>
            </tr> 
         </table>		  
	 </div>
  </section>
  
  
  <footer>
       
       <?php include "../footer/footer.php"; ?>
        
    </footer>
  
  
   
</body>
</html>