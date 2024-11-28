<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2= "SELECT * FROM reserva
			LEFT JOIN usuario ON reserva.ID=usuario.ID
			LEFT JOIN libro ON reserva.ID_LIBRO=libro.ID_LIBRO
            WHERE ID_Reserva = $bus";
	
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>