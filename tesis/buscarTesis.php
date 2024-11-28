<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2="SELECT * FROM tesis 	
	WHERE Titulo LIKE '%$bus%'";
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>