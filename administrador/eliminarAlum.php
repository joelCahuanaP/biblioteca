<?php 

   include("../conexion/conexion.php");
   
	if(isset($_REQUEST['idAlum'])){
		
	 $id=$_REQUEST['idAlum'];	
     $consulta=" DELETE FROM alumno WHERE ID='$id'";
	 
	 $resultado=mysqli_query($conexion,$consulta);
		 header("location: usuarioAlum.php");
	
	}

?>
