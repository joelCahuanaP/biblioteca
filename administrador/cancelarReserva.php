<?php 

   include("../conexion/conexion.php");
   
	if(isset($_REQUEST['idReserva'])){
		
	 $id=$_REQUEST['idReserva'];	
     $consulta=" DELETE FROM reserva WHERE ID_Reserva='$id'";
	 
	 $resultado=mysqli_query($conexion,$consulta);
		 header("location: reservasAdmin.php");
	
	}

?>