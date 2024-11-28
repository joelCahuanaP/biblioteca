<?php 
include("../conexion/conexion.php");
session_start();
 if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Catalogo en linea.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="menu,enlaces"/>
<meta name="Description" content="menu enlaces. enlaces biblioteca"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 
 <link rel="stylesheet" href="../css/estilo-header.css">
 <link rel="stylesheet" href="../css/catalogo.css">
 <link rel="stylesheet" href="../css/recomendado.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 </head>
 <body bgcolor=white >
 
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
   <nav >
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
      <p>|  CATALOGO EN LINEA  |</p>
   </div> 
   
    <script src="../js/header-dibujo.js"></script>
</header>
 
 
<div class="abc">
 
 <aside class="repertorio">
  <div class="aside-titulo">
    <p>Repertorio</p>
  </div>
  <div class="aside-contenedor">
      <div class="aside-libros">
          <img src="../imagenes/libro.png" alt="libros"/></br>
		  <a href="../libros/catalogo-libros.php" target="_blank">Libros</a>
      </div>
      <div class="aside-revistas">
          <img src="../imagenes/revista.png" alt="revistas"/></br>
		  <a href="../revistas/revista.php" target="_blank">Revistas</a>
      </div>
  </div>
</aside>  
 
 
 
<section class="contenedor">
 <div class="contenedor1">
   <div>
      Buscar
   </div>
   <div>
     <select name="seleccione">
       <option>Titulo</option>
       <option>Autor</option>
       <option>Tema</option>
       <option>ISBN</option>
     </select>
   </div>
   <div>
  
   </div>
   <div class="barratext">
       <form action="#" method="post" >
         <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro"/>
         <input class="bus" type="submit" value="Buscar"/>
	  </form> 
   </div>
   
</div>

<div class="recomendado">
  <p>| Recomendados</p>
  
  <?php 
   if(isset($_POST['buscador'])==null){
  $consulta= "SELECT * FROM libro
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL
					
			WHERE libro.ID_AREA=1";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){	  
  ?>
  
  <div class="libro">
      <div class="libro-imagen">
	     <?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?>
	     <!-- <img src="../imagenes/analisis.jpg" alt="matematico"/>-->
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4><?php echo $row['Titulo']?></h4></br>
          <p><b>Autor:</b> <?php echo $row['Nombre']?></p>
          <p><b>Editorial:</b> <?php echo $row['NombreEdi']?></p>
	      <p><b>Codigo:</b> <?php echo $row['ID_LIBRO']?></p></br>
	      <p><b>ISBN:</b><?php echo $row['ISBN']?></p>
		  </br>
		  <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver libro</font></a>"?>nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	     <a href="reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
  
  <?php }}else{ include("../administrador/buscarLibro.php");
			  
			  if(isset($resultado2)!=null){
			  while($row=mysqli_fetch_array($resultado2)){?>
			  
			  <div class="libro">
      <div class="libro-imagen">
	     <?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?>
	     <!-- <img src="../imagenes/analisis.jpg" alt="matematico"/>-->
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4><?php echo $row['Titulo']?></h4></br>
          <p><b>Autor:</b> <?php echo $row['Nombre']?></p>
          <p><b>Editorial:</b> <?php echo $row['NombreEdi']?></p>
	      <p><b>Codigo:</b> <?php echo $row['ID_LIBRO']?></p></br>
	      <p><b>ISBN:</b><?php echo $row['ISBN']?></p>
		  </br>
		  <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver libro</font></a>"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	     <?php if(isset($texto)){echo "<a href='reservar.php' target='_self'>Reservar</a>";}?></br></br></br>
	  </div>
  </div>
			  
	<?php }}else{echo "<h3>No se han encontrado registro de la busqueda</h3>";}}?>		  
			  
			  
			  
			  
			  
			  
			  
			  
  
    <div class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/estadistica.png" alt="estadistica"/>
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4>ESTADISTICA</h4></br>
          <p><b>Autor:</b> Mario F. Triola</p>
          <p><b>Edición:</b> Decimo segunda </p>
	      <p><b>Codigo:</b> 1b34</br></p></br>
	      <a href="../libros-pdf/mate/analisismatematico.pdf" target="_blank"><font color=#873600 >Ver libro</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
  
    <div class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/probabilidad.jpg" alt="probabilidad" />
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4>INTRODUCCION A LA PROBABILIDAD Y ESTADISTICA</h4></br>
          <p><b>Autor:</b> Mendenhall - Beaver - Beaver</p>
          <p><b>Edición:</b> Decimo tercera</p>
	      <p><b>Codigo:</b> 1b44</p></br>
	      <a href="../libros-pdf/mate/analisismatematico.pdf" target="_blank"><font color=#873600 >Ver libro</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
</div>
  
 </section>
</div>


<footer>
       
       <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>