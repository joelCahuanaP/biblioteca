
<?php 

 include("../conexion/conexion.php");
session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
/*$consulta= "SELECT * FROM libro
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL
			LEFT JOIN stock ON libro.ID_STOCK=stock.ID_STOCK			
			";

         $resultado= mysqli_query($conexion,$consulta);
 */
  
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
	<link rel="stylesheet" href="../css/estilos-footer.css">
	<link rel="stylesheet" href="../css/libros-sistema.css">
	<link rel="stylesheet" href="../css/librosListar.css">
	<style>
	   .port{
		   width:100px;
		   height:120px;
	   }
	</style>
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
<div class="contenedor1 opciones">
   <div>
      Buscar
   </div>
   
   <div class="barratext">
      <form action="#" method="post" >
         <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro"/>
         <input type="submit" value="Buscar"/>
	  </form>
   </div>    
   
   <div>
      <a href="añadirLibro.php" ><button id="bus" name="button" class="btn btncolor">Añadir Libro</button></a>
   </div>
</div>

<div class="cont-libro">
  <center><div class="tit">
       <h2>REGISTRO LIBROS </h2>
  </div></center>
    <table>
	     <thead>
		    <tr>
			    <th>Codigo</th>
			    <th>Portada</th>
			    <th>Titulo</th>
			    <th>Autor</th>
				<th>Area</th>
				<th>Editorial</th>
				<th>Ubicacion</th>
				<th>Stock</th>
				<th colspan="2"><center>Opciones</center></th>
			</tr>
		 </thead>
		 <tbody>
		    <?php 
		      if(isset($_POST['buscador'])==null){
				  
				 $consulta= "SELECT * FROM libro
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL			
			";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){		//listado de los libros	
			?>
			
		    <tr>
			    <td><?php echo $row['ID_LIBRO']?></td>
				<td><?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?></td>
				<td><?php echo $row['Titulo']?></td>
				<td><?php echo $row['Nombre']?></td>
				<td><?php echo $row['Materia']?></td>
				<td><?php echo $row['NombreEdi']?></td>
				<td><?php echo $row['Ubicacion']?></td>
				<td><?php echo $row['Stock']?></td>
				<td><?php echo "<a class='controles' href='actualizarLibro.php?idLibro=".$row["ID_LIBRO"]."&idAutor=".$row["ID_AUTOR"]."& idEditorial=".$row["ID_EDITORIAL"]."&idArea=".$row["ID_AREA"]."'>Editar</a>" ?></td>
				<td><?php echo "<a class='controles' href='eliminarLibro.php?idLibro=".$row["ID_LIBRO"]."&idAutor=".$row["ID_AUTOR"]."& idEditorial=".$row["ID_EDITORIAL"]."&idArea=".$row["ID_AREA"]."'>Eliminar</a>" ?></td>
				
			</tr>
			  <?php }}else{ include("buscarLibro.php");
			  
			  if(isset($resultado2)!=null){
			  while($row=mysqli_fetch_array($resultado2)){?> 
				         		
			 <tr>
			    <td><?php echo $row['ID_LIBRO']?></td>
				<td><?php echo "<img class='port' src=".$row['Portada']. "alt='libro' />"?></td>
				<td><?php echo $row['Titulo']?></td>
				<td><?php echo $row['Nombre']?></td>
				<td><?php echo $row['Materia']?></td>
				<td><?php echo $row['NombreEdi']?></td>
				<td><?php echo $row['Ubicacion']?></td>
				<td><?php echo $row['Stock']?></td>
				<td><?php echo "<a class='controles' href='actualizarLibro.php?idLibro=".$row["ID_LIBRO"]."&idAutor=".$row["ID_AUTOR"]."& idEditorial=".$row["ID_EDITORIAL"]."&idArea=".$row["ID_AREA"]."'>Editar</a>" ?></td>
				<td><?php echo "<a class='controles' href='eliminarLibro.php?idLibro=".$row["ID_LIBRO"]."&idAutor=".$row["ID_AUTOR"]."& idEditorial=".$row["ID_EDITORIAL"]."&idArea=".$row["ID_AREA"]."'>Eliminar</a>" ?></td>
				
			</tr>    
			
			    
				  
			  <?php }}else{echo "<h3>No se han encontrado registro de la busqueda</h3>";}}?>
			
		 </tbody>	
			
	</table>
  
</div>









   <footer>
        <?php include "../footer/footer.php"; ?>

   </footer>


</body>
</html>