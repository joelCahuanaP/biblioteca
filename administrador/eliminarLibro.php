<?php 

   include("../conexion/conexion.php");
   
	if(isset($_REQUEST['idLibro'])){
		
	 $id=$_REQUEST['idLibro'];	
     $consulta=" DELETE FROM libro WHERE ID_LIBRO='$id'";
	 
	 $resultado=mysqli_query($conexion,$consulta);
		 header("location: libros.php");
	
	}

?>