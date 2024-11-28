<?php 

   include("../conexion/conexion.php");
   
	if(isset($_REQUEST['idExterno'])){
		
	 $id=$_REQUEST['idExterno'];	
     $consulta=" DELETE FROM externo WHERE ID='$id'";
	 
	 $resultado=mysqli_query($conexion,$consulta);
		 header("location: usuarioExterno.php");
	
	}

?>