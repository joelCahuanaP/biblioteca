<?php 

 include("../conexion/conexion.php");
 
 
if(isset($_POST['idUser']) && isset($_POST['idLibro']) && isset($_POST['Fentrega']) && isset($_POST['Fdevolucion']))
{
   
   $iduss=$_POST['idUser'];
   $idli=$_POST['idLibro'];
   $entrega=$_POST['Fentrega'];
   $devo=$_POST['Fdevolucion'];  
   
         $consulta= "SELECT * FROM usuario WHERE ID=$iduss";
         $resultado=mysqli_query($conexion,$consulta);
		 $num_row=mysqli_num_rows($resultado);

        if($num_row > 0){		
			$fila = mysqli_fetch_array($resultado);
	        $ed=$fila['ID'];
		}
		 
        
		 $consulta= "SELECT * FROM libro WHERE ID_LIBRO=$idli";
         $resultado=mysqli_query($conexion,$consulta);		 
		 $num_row1=mysqli_num_rows($resultado);

        if($num_row1 > 0){		
	     $fila = mysqli_fetch_array($resultado);
	     $ed2=$fila['ID_LIBRO'];
		}
		  
 $consulta1="INSERT INTO reserva(ID_Reserva,ID,ID_LIBRO,Fe_Reserva,Fe_devo) VALUES(null,$ed,$ed2, '$entrega', '$devo')";	
 $resultado=mysqli_query($conexion,$consulta1);	
			
			
if($resultado){
	echo "Registrado";
}else{
	echo "Error";
}
         header("location: reservar.php");
   
   
   
}
?>