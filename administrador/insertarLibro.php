<?php 
 
 include("../conexion/conexion.php");
 
 
 if(isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['area'])&& isset($_POST['isbn'])&& isset($_POST['rulibro'])
     && isset($_POST['stock'])&& isset($_POST['ubicacion']) && isset($_POST['editorial']) && isset($_POST['ruta'])){
		 
		 
		 $aut=$_POST['autor'];		 
		 $consulta= "SELECT * FROM autor WHERE Nombre='$aut'";
         $resultado=mysqli_query($conexion,$consulta);
         $num_row=mysqli_num_rows($resultado);

        if($num_row > 0){		
			$fila = mysqli_fetch_array($resultado);
			$autorid=$fila['ID_AUTOR'];
		}else{
			$consulta="INSERT INTO autor(Nombre) VALUES('".$_POST['autor']."')"; 		 
		    $resultado=mysqli_query($conexion,$consulta);
			
			$consulta= "SELECT * FROM autor WHERE Nombre='$aut'";
            $resultado=mysqli_query($conexion,$consulta);
			$fila = mysqli_fetch_array($resultado);
			$autorid=$fila['ID_AUTOR'];			
		}		 
		 
		 
		 $are=$_POST['area'];		 
		 $consulta= "SELECT * FROM area WHERE Materia='$are'";
         $resultado=mysqli_query($conexion,$consulta);
         $num_row=mysqli_num_rows($resultado);

        if($num_row > 0){		
			$fila = mysqli_fetch_array($resultado);
			$areaid=$fila['ID_AREA'];
		}else{
			$consulta="INSERT INTO area(Materia) VALUES('".$_POST['area']."')"; 		 
		    $resultado=mysqli_query($conexion,$consulta);
			
			$consulta= "SELECT * FROM area WHERE Materia='$are'";
            $resultado=mysqli_query($conexion,$consulta);
			$fila = mysqli_fetch_array($resultado);
			$areaid=$fila['ID_AREA'];			
		}		 

         $edi=$_POST['editorial'];		 
		 $consulta= "SELECT * FROM editorial WHERE NombreEdi='$edi'";
         $resultado=mysqli_query($conexion,$consulta);
         $num_row=mysqli_num_rows($resultado);

        if($num_row > 0){		
			$fila = mysqli_fetch_array($resultado);
			$ediid=$fila['ID_EDITORIAL'];
		}else{
			$consulta="INSERT INTO editorial(NombreEdi) VALUES('".$_POST['editorial']."')"; 		 
		    $resultado=mysqli_query($conexion,$consulta);
			
			$consulta= "SELECT * FROM editorial WHERE NombreEdi='$edi'";
            $resultado=mysqli_query($conexion,$consulta);
			$fila = mysqli_fetch_array($resultado);
			$ediid=$fila['ID_EDITORIAL'];				
		}		 

        $tit=$_POST['titulo'];
		$ubi=$_POST['ubicacion'];
		$url=$_POST['ruta'];
		$sto=$_POST['stock'];
		$isb=$_POST['isbn'];
		$urllibro=$_POST['rulibro'];
        if(isset($autorid) && isset($areaid) && isset($ediid)){
			
		$consulta="INSERT INTO libro(ID_LIBRO,Titulo,ID_AUTOR,ID_AREA,ID_EDITORIAL,Ubicacion,Stock,Portada,ISBN,Link) VALUES(null,'$tit',$autorid, $areaid, $ediid,'$ubi',$sto,'$url','$isb','$urllibro')";	
		$resultado=mysqli_query($conexion,$consulta);	
			

         header("location: añadirLibro.php");
		 
		 
		}else{
			echo "Variables no encontradas";
		}
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	 }
	



?>