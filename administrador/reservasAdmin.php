<?php 

 include("../conexion/conexion.php");
session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
  
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
	   
	   .tit{
		   margin-button:10px;
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
      <p>|  Reservas  |</p>
   </div> 
   
   <script src="../js/header-dibujo.js"></script> 
</header>
<div class="contenedor1 opciones">
   <div>
      Buscar
   </div>
   <div class="barratext">
      <form action="#" method="post" >
         <input type="text" name="buscador" id="buscador" placeholder="Codigo Reserva"/>
         <input type="submit" value="Buscar"/>
	  </form>
   </div>    
   
</div>

<div class="cont-libro">
  <center><div class="tit">
       <h2>REGISTRO DE RESERVA </h2>
  </div></center>
  
    <table>
	     <thead>
		    <tr>
			    <th>ID Reserva</th>
			    <th>ID Usuario</th>
			    <th>Codigo de libro</th>
			    <th>Fecha Recojo</th>
				<th>Fecha Devolucion</th>
				<th colspan="2"><center>Opciones</center></th>
			</tr>
		 </thead>
		 <tbody>
		    <?php 
		      if(isset($_POST['buscador'])==null){
				  
				 $consulta= "SELECT * FROM reserva
			LEFT JOIN usuario ON reserva.ID=usuario.ID
			LEFT JOIN libro ON reserva.ID_LIBRO=libro.ID_LIBRO
            			
			";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){		//listado de los libros	
			?>
			
		    <tr>
			    <td><?php echo $row['ID_Reserva']?></td>
				<td><?php echo $row['ID']?></td>
				<td><?php echo $row['ID_LIBRO']?></td>
				<td><?php echo $row['Fe_Reserva']?></td>
				<td><?php echo $row['Fe_Devo']?></td>
				<td><?php echo "<a class='controles' href='formUpdateReserva.php?idLibro=".$row["ID_LIBRO"]."&idReserva=".$row["ID_Reserva"]."&idUsuario=".$row["ID"]."'>Editar</a>" ?></td>
			    <td><?php echo "<a class='controles' href='cancelarReserva.php?idReserva=".$row["ID_Reserva"]."'>Cancelar</a>" ?></td>
			</tr>
			  <?php }}else{ include("buscarReserva.php");
			  
			  if(isset($resultado2)!=null){
				  
			  while($row=mysqli_fetch_array($resultado2)){?> 
				         		
			 <tr>
			    <td><?php echo $row['ID_Reserva']?></td>
				<td><?php echo $row['ID']?></td>
				<td><?php echo $row['ID_LIBRO']?></td>
				<td><?php echo $row['Fe_Reserva']?></td>
				<td><?php echo $row['Fe_Devo']?></td>
				<td><?php echo "<a class='controles' href='formUpdateReserva.php?idLibro=".$row["ID_LIBRO"]."&idReserva=".$row["ID_Reserva"]."&idUsuario=".$row["ID"]."'>Editar</a>" ?></td>
			   <td><?php echo "<a class='controles' href='eliminarLibro.php?idReserva=".$row["ID_Reserva"]."'>Cancelar</a>" ?></td>
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