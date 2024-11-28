<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2="SELECT * FROM externo 
	LEFT JOIN usuario ON externo.ID=usuario.ID
	WHERE Nombre LIKE '%$bus%'";
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>