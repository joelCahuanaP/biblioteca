<?php 

  include("../conexion/conexion.php");
  
  
  
  if(isset($_POST['idLibro']) && isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['area'])
     && isset($_POST['stock'])&& isset($_POST['ubicacion']) && isset($_POST['editorial']) && isset($_POST['ruta'])&& isset($_POST['idAutor'])){
		 
		 
		$consulta="UPDATE libro 
		            SET
					Titulo='".$_POST['titulo']."',
					Ubicacion='".$_POST['ubicacion']."',
					Portada='".$_POST['ruta']."'
					WHERE
					ID_LIBRO='".$_REQUEST['idLibro']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		
		$consulta="UPDATE autor 
		            SET
					Nombre='".$_POST['autor']."'
					WHERE
					ID_AUTOR='".$_REQUEST['idAutor']."'
					"; 
		 
		 $resultado=mysqli_query($conexion,$consulta);
		 
		 $consulta="UPDATE area 
		            SET
					Materia='".$_POST['area']."'					
					WHERE
					ID_AREA='".$_REQUEST['idArea']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		 
		$consulta="UPDATE editorial 
		            SET
					NombreEdi='".$_POST['editorial']."'					
					WHERE
					ID_EDITORIAL='".$_REQUEST['idEditorial']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		 
		 
		$consulta="UPDATE stock
		            SET
					Cantidad='".$_POST['stock']."'					
					WHERE
					ID_STOCK='".$_REQUEST['idStock']."'
					"; 
		 
		$resultado=mysqli_query($conexion,$consulta);
		 		 		 		 
		 header("location: libros.php");
	 }else{
		 echo "Variable no encontrada";
	 }
	 
	

?>