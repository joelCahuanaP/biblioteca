<?php 
if(isset($_POST['buscador']))
{
    $bus=$_POST['buscador'];
    $consulta2="SELECT * FROM libro 
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL	
	WHERE Titulo LIKE '%$bus%'";
    $resultado2= mysqli_query($conexion,$consulta2);
	
}
?>