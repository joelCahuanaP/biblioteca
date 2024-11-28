<?php
   include('../conexion/conexion.php');
   session_start();
    if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Busqueda Avanzada.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="menu,enlaces"/>
<meta name="Description" content="menu enlaces. enlaces biblioteca"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
<link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/estilo-catalogo.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 <link rel="stylesheet" href="../css/estilo-busavanzada.css">
 
 </head>
 <body bgcolor=white >
 
  <header>
  
   <div class="div-header">
     <img class="icono" src="../imagenes/logo.png" alt="logo"/>
     <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>
   
     <div class="sesion">
       <ul>
         <li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='../login/salir.php' >Cerrar Sesion</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "<a class='boton' href='../login/menuregistro.php' >Iniciar Sesion</a>";
				  echo "</html>";
			  }  ?></li>
		 <li><?php if(isset($texto)) {echo $texto;} ?></li>
       </ul>
     </div>
   </div>
   
  <div class="div-header letra">
      <p>|  BUSQUEDA AVANZADA  |</p>
   </div> 
   
</header>
 
 
<div class="contenedor-avanzada">
  <div>
     <p><b>Busqueda</b> </p></br>
	 
	Campo de Busqueda: <select id="campo" name="seleccione">
      <option>&nbsp;&nbsp;&nbsp;Titulo&nbsp;&nbsp;&nbsp;</option>
      <option>&nbsp;&nbsp;&nbsp;Autor&nbsp;&nbsp;&nbsp;</option>
      <option>&nbsp;&nbsp;&nbsp;Tema&nbsp;&nbsp;&nbsp;</option>
      <option>&nbsp;&nbsp;&nbsp;ISBN&nbsp;&nbsp;&nbsp;</option>
	  <option>&nbsp;&nbsp;&nbsp;ISSN&nbsp;&nbsp;&nbsp;</option>
    </select></br>
	   Introduzca un termino de busqueda: <input type="text" name="Nombre" size="30" placeholder="Escriba aqui"/>
	   <select>
	      <option>Y</option>
		  <option>O</option>
		  <option>NO</option>
	   </select></br>
	   Introduzca un termino de busqueda: <input type="text" name="Nombre" size="30" placeholder="Escriba aqui"/>
	   
  </div>
        <hr></hr>
  <div>
      <p><b>Restringir resultados por </b></p></br>
	    Tipo de documento: <select id="cb" name="seleccione">
	                            <option>Todas las opciones&nbsp</option>
                                <option>Libros</option>
                                <option>Libros digitales</option>
                                <option>Revistas</option>
	                            <option>Articulos</option>
                                <option>Tesis</option>
	                            <option>videos</option>
	                            <option>Audios</option>
                           </select>
		
		Idioma:            <select id="cb" name="seleccione">
	                            <option>Todas las opciones&nbsp</option>
                                <option>Español</option>
                                <option>Ingles</option>
                                <option>Portugues</option>
	                            <option>Aleman&nbsp</option>
                                <option>Franses</option>
                           </select></br>
		Rango de fechas: <input id="fecha"type="text" name="fecha" size="30" placeholder="Escriba aqui"/>&nbsp;&nbsp;&nbsp; Ejemplo: 1999-2001
  </div>
        <hr></hr></br>
	<button id="btnavanzado"name="button" class="btn btncolor">Buscar</button>	
</div>


<footer>
      <?php include "../footer/footer.php"; ?>
        
    </footer>
</body>
</html>