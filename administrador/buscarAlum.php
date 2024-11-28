<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2="SELECT * FROM alumno
    LEFT JOIN usuario ON alumno.ID=usuario.ID	
	WHERE Nombre LIKE '%$bus%'";
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>