<?php 

   include("../conexion/conexion.php");
   
	if(isset($_REQUEST['idDocente'])){
		
	 $id=$_REQUEST['idDocente'];	
     $consulta=" DELETE FROM docente WHERE ID='$id'";
	 
	 $resultado=mysqli_query($conexion,$consulta);
		 header("location: usuarioDocente.php");
	
	}
