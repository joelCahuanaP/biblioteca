<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2="SELECT * FROM docente
    LEFT JOIN usuario ON docente.ID=usuario.ID	
	WHERE Nombre LIKE '%$bus%'";
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>