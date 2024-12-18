<?php 
include("../conexion/conexion.php");
session_start();
  if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Libros - Industrial</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/catalogo.css">
 <link rel="stylesheet" href="../css/libros-sistema.css">
 <link rel="stylesheet" href="../css/recomendado.css">
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
      <p>|  LIBROS - Ing. Industrial  |</p>
   </div>  
</header>

<div class="abc">
 
 
 <aside class="repertorio">
  <div class="aside-titulo">
    <p>Filtrar Busqueda</p>
  </div>
  
  <div class="aside-contenedor">
      <div class="aside-filtros">
	 </br></br>
		  <p><b>Autor</b></p>
		  <input id="buscador" type="text" name="tema"  placeholder="Autor"/>
      </div>
      <div class="aside-filtros">
	 </br><p><b>Editorial</b></p>
		  <input type="text" id="buscador" name="año1"  placeholder="Editorial"/>-
		  
		  
		  
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
  <p>| LIBROS</p>
  <!--Primer libro-->
  
  <?php 
   if(isset($_POST['buscador'])==null){
  $consulta= "SELECT * FROM libro
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL			
			WHERE libro.ID_AREA=8";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){	  
  ?>
  
  <ul id="listaArticulos">
  <li class="articulo">
  <div align="left" class="libro">
      <div class="libro-imagen">
	      <?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?>
	      <!--<img src="../imagenes/libro-industrial.png" alt="matematico"/>-->
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4><?php echo $row['Titulo']?></h4></br>
          <p><b>Autor:</b> <?php echo $row['Nombre']?></p>
          <p><b>Editorial:</b> <?php echo $row['NombreEdi']?></p>
	      <p><b>Codigo:</b> <?php echo $row['ID_LIBRO']?></p>
		  <p><b>ISBN:</b> <?php echo $row['ISBN']?></p>
		  </br>
	      <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver libro</font></a>"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <?php if(isset($texto)){echo "<a href='../recursos/reservar.php' target='_self'>Reservar</a>";}?></br></br></br>
	  </div>
  </div>
  </li>
  </ul>
  <?php }}else{ include("../administrador/buscarLibro.php");
			  
			  if(isset($resultado2)!=null){
			  while($row=mysqli_fetch_array($resultado2)){?> 
  <ul id="listaArticulos">
  <li class="articulo">
  <div align="left" class="libro">
      <div class="libro-imagen">
	      <?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?>
	      <!--<img src="../imagenes/libro-industrial.png" alt="matematico"/>-->
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4><?php echo $row['Titulo']?></h4></br>
          <p><b>Autor:</b> <?php echo $row['Nombre']?></p>
          <p><b>Editorial:</b> <?php echo $row['NombreEdi']?></p>
	      <p><b>Codigo:</b> <?php echo $row['ID_LIBRO']?></p>
		  <p><b>ISBN:</b> <?php echo $row['ISBN']?></p>
		  </br>
	      <?php echo "<a  href=".$row['Link']. "target='_blank'><font color=#873600 >Ver libro</font></a>"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="../recursos/reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
  </li>
  </ul>
  <?php }}else{echo "<h3>No se han encontrado registro de la busqueda</h3>";}}?>
  
  <!--Segundo libro-->
  <ul id="listaArticulos">
  <li class="articulo">
    <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/libro-industrial2.png" alt="estadistica"/>
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4>INGENIERIA INDUSTRIAL- INGENIERIA DE METODOS</h4></br>
          <p><b>Autor:</b> BOCÁNGEL WEYDERT, Guillermo Augusto - ROSAS ECHEVARRÍA, Cesar Wilfredo- BOCÁNGEL MARIN, Guillermo Augusto</p>
          <p><b>Edición:</b> Decimo segunda </p>
	      <p><b>Codigo:</b> 1b34</p>
		  <p><b>ISBN:</b> 978-612-00-6719-2</p>
		  <p><b>Año:</b> 2004</p>
	      <a href="https://www.unheval.edu.pe/portal/wp-content/uploads/2021/09/LIBRO-INGENIERIA-DE-METODOS-I.pdf" target="_blank"><font color=#873600 >Ver libro</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="../recursos/reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
  </li>
  </ul>
  <!--Tercer libro-->
  <ul id="listaArticulos">
  <li class="articulo">
    <div align="left" class="libro">
      <div class="libro-imagen">
	      <img src="../imagenes/libro-industrial.png" alt="probabilidad" />
      </div>	   
	  <div class="libro-detalles">
	  
	      <h4>INTRODUCCION A LA INGENIERIA INDUSTRIAL</h4></br>
          <p><b>Autor:</b> Gabriel Baca U. - Margarita Cruz V.I. - Marco Antonio Cristóbal V</p>
          <p><b>Edición:</b> Segunda</p>
	      <p><b>Codigo:</b> 1b44</p>
		  <p><b>Año:</b> 2008</p>
	      <a href="https://www.editorialpatria.com.mx/mobile/pdffiles/9786074383164.pdf" target="_blank"><font color=#873600 >Ver libro</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a href="../recursos/reservar.php" target="_self">Reservar</a></br></br></br>
	  </div>
  </div>
  </li>
  </ul>
</div>
  
 </section>
</div>

<script src="../js/libros.js"></script>

<footer>
       
       <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>