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
	   
	   thead{
		     background:#34495E;
	   }
	   .controles{
		   margin:10px;
		   
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
      <p>|  USUARIOS - EXTERNO |</p>
   </div> 
   
   <script src="../js/header-dibujo.js"></script> 
</header>
<div class="contenedor1 opciones">
   <div>
      Buscar
   </div>

   <div class="barratext">
      <form action="#" method="post" >
         <input type="text" name="buscador" id="buscador" placeholder="Buscar Usuario"/>
         <input type="submit" value="Buscar"/>
	  </form>
   </div>    
   
   
   <div>
      <a href="formInsertarExterno.php" ><button id="bus" name="button" class="btn btncolor">Añadir Usuario</button></a>
   </div>
</div>

<div class="cont-libro">
  <center><div class="tit">
       <h2>REGISTRO USUARIOS - EXTERNOS </h2>
  </div></center>
    <table>
	     <thead>
		    <tr>
			    <th>Codigo</th>
			    <th>Nombre</th>
			    <th>Apellidos</th>
			    <th>DNI</th>
				<th>Correo</th>
				<th>Universidad</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Telefono</th>
				<th colspan="2"><center>Opciones</center></th>
			</tr>
		 </thead>
		 <tbody>
		    <?php 
		      if(isset($_POST['buscador'])==null){
				  
				 $consulta= "SELECT * FROM externo
				 LEFT JOIN usuario ON externo.ID=usuario.ID
				 ";

            $resultado= mysqli_query($conexion,$consulta); 
				  
				  
				  
			    while($row=mysqli_fetch_array($resultado)){		//listado de los usuarios de tipo docente
			?>
			
		    <tr>
			    <td><?php echo $row['ID']?></td>
				
				<td><?php echo $row['Nombre']?></td>
				<td><?php echo $row['Apellido']?></td>
				<td><?php echo $row['DNI']?></td>
				<td><?php echo $row['Correo']?></td>
				<td><?php echo $row['Universidad']?></td>
				<td><?php echo $row['Usuario']?></td>
				<td><?php echo $row['Contraseña']?></td>
				<td><?php echo $row['Telefono']?></td>
				<td><?php echo "<a class='controles' href='formUpdateExterno.php?idExterno=".$row["ID"]."&idus=".$row["ID_Externo"]."'>Editar</a>" ?></td>
				<td><?php echo "<a class='controles' href='eliminarExterno.php?idExterno=".$row["ID"]."'>Eliminar</a>" ?></td>
				
			</tr>
			  <?php }}else{ include("buscarExterno.php");
			  
			  if(isset($resultado2)!=null){
			  while($row=mysqli_fetch_array($resultado2)){?> 
			
            <tr>
			    <td><?php echo $row['ID']?></td>
				
				<td><?php echo $row['Nombre']?></td>
				<td><?php echo $row['Apellido']?></td>
				<td><?php echo $row['DNI']?></td>
				<td><?php echo $row['Correo']?></td>
				<td><?php echo $row['Universidad']?></td>
				<td><?php echo $row['Usuario']?></td>
				<td><?php echo $row['Contraseña']?></td>
				<td><?php echo $row['Telefono']?></td>
				<td><?php echo "<a class='controles' href='formUpdateExterno.php?idExterno=".$row["ID"]."'>Editar</a>" ?></td>
				<td><?php echo "<a class='controles' href='eliminarExterno.php?idExterno=".$row["ID"]."'>Eliminar</a>" ?></td>
				
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