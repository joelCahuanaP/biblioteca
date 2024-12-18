<?php 

 include("../conexion/conexion.php");
   session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
   
   $consulta= "SELECT * FROM libro
			LEFT JOIN autor ON libro.ID_AUTOR=autor.ID_AUTOR  
			LEFT JOIN area ON libro.ID_AREA=area.ID_AREA  
			LEFT JOIN editorial ON libro.ID_EDITORIAL=editorial.ID_EDITORIAL
            WHERE ID_LIBRO=".$_REQUEST["idLibro"]."				
			";

           $resultado= mysqli_query($conexion,$consulta);
           $con = mysqli_fetch_assoc($resultado);
  
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
	<meta charset="UTF-8">
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilo-header.css">
	<link rel="stylesheet" href="../css/estilos-footer.css">
	<link rel="stylesheet" href="../css/estiloActualizar.css">
	<style>
	   .port{
		   width:100px;
		   height:120px;
	   }
	</style>
</head>

<body>
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
   
   <div class="hero dibujo">
   
      <div class="mando-anterior diseño">
	  <input type="button" id="anterior" value="<<">
    </div>	
    <div class="mando-siguiente diseño">
	  <input type="button" id="siguiente" value=">>"></center>
	</div>
     <img id="imagen" src="../imagenes/portAdmin.jpg" />
  
  </div>   
  
   <div class="div-header menu">
   <nav class="navbar">
       <div class="enlaces">
	     <ul class="nav">
		    <li><a href="indexAdmin.php">Inicio</a></li>

            <li><a href="">Transacciones</a>
			    <ul>
				    <li><a href="reservasAdmin.php">Reservas</a></li>
					<li><a href="librosPrestados.php">Libros Prestados</a></li>
					
				</ul></li>			
			<li><a href="libros.php">Libros</a></li>
			<li><a href="">Usuarios</a>
			    <ul>
				    <li><a href="usuarioAlum.php">Alumnos</a></li>
					<li><a href="usuarioDocente.php">Docentes</a></li>
					<li><a href="usuarioExterno.php">Externos</a></li>			
				</ul></li>
            				
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
		 </ul>
	   </div> 
   </nav>
   </div>
      
  <div class="div-header letra">
      <p>|  BIBLIOTECA  |</p>
   </div> 
   
   <script src="../js/header-dibujo.js"></script> 
</header>

<div class="actuLibro">
    <div class="content">
            <br>
            <h1 class="logo"><span>A</span>ctualizar <span>L</span>ibro</h1>
            <br>

            
                <div class="contact-form">
                    
                    <form action="update.php" method="post" >
                        
						<div class="campo">
						    <label>ID</label></br> 
						    <input readonly type="text" name="idLibro" placeholder="Id Libro" value="<?php if(isset($con['ID_LIBRO'])): echo $con['ID_LIBRO']; endif; ?>">
							<input type="hidden" name="idAutor" placeholder="Id Autor" value="<?php if(isset($con['ID_AUTOR'])): echo $con['ID_AUTOR']; endif; ?>">
							<input type="hidden" name="idArea" placeholder="Id Area" value="<?php if(isset($con['ID_AREA'])): echo $con['ID_AREA']; endif; ?>">
							<input type="hidden" name="idEditorial" placeholder="Id Autor" value="<?php if(isset($con['ID_EDITORIAL'])): echo $con['ID_EDITORIAL']; endif; ?>">
							<input type="hidden" name="idStock" placeholder="Id Stock" value="<?php if(isset($con['ID_STOCK'])): echo $con['ID_STOCK']; endif; ?>">
						</div>
                        <div class="campo">
                            <label>Editorial</label>
                            <input type="text" name="editorial" placeholder="Editorial" value="<?php if(isset($con['NombreEdi'])): echo $con['NombreEdi']; endif; ?>">
                        </div>
						<div class="campo">
                            <label>Titulo</label>
                            <input type="text" name="titulo" placeholder="titulo" value="<?php if(isset($con['Titulo'])): echo $con['Titulo']; endif; ?>">
                        </div>
                       <div class="campo">
                            <label>Ubicacion</label>
                            <input type="text" name="ubicacion" placeholder="Ubicacion" value="<?php if(isset($con['Ubicacion'])): echo $con['Ubicacion']; endif; ?>">
                        </div>
						<div class="campo">
                            <label>Autor</label>
                            <input type="text" name="autor" placeholder="Autor" value="<?php if(isset($con['Nombre'])): echo $con['Nombre']; endif; ?>">
                        </div>
                        <div class="campo">
                            <label>Stock</label>
                            <input type="text" name="stock" placeholder="stock" value="<?php if(isset($con['Stock'])): echo $con['Stock']; endif; ?>">
                        </div>
                        <div class="campo">
                            <label>Area    </label>
                            <input type="text" name="area" placeholder="Area" value="<?php if(isset($con['Materia'])): echo $con['Materia']; endif; ?>">
                        </div>
                        <div class="campo">
                            <label>Ruta de partada</label>
                            <input type="text" name="ruta" placeholder="Ruta" value=<?php if(isset($con['Portada'])): echo $con['Portada']; endif; ?>> 
                        </div>
						<div class="campo">
                            <label>Ruta de Libro</label>
                            <input  type="text" name="rulibro" placeholder="Ruta Libro" value=<?php if(isset($con['Link'])): echo $con['Link']; endif; ?>>
                        </div>
						 <div class="campo">
                            <label>ISBN</label>
                            <input id="list" type="text" name="isbn" placeholder="ISBN" value="<?php if(isset($con['ISBN'])): echo $con['ISBN']; endif; ?>">
                        </div>
						
						
                       <div class="btn-enviar">
						   <input type="submit" value="Enviar"/>
						   <input type="reset" value="Borrar todo"/>
						</div>
                    </form>
                </div>
            
             <br><br><br><br><br>
        </div>
		
    </div>


 <footer>
 <br>
        <?php include "../footer/footer.php"; ?>

   </footer>


</body>
</html>