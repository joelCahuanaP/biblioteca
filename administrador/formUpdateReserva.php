<?php 

 include("../conexion/conexion.php");
    session_start();
   if(isset($_SESSION['tex'])){
   $texto=$_SESSION['tex'];}
   
   
   $consulta= "SELECT * FROM reserva
            WHERE ID=".$_REQUEST["idReserva"]."				
			";

           $resultado= mysqli_query($conexion,$consulta);
           $con = mysqli_fetch_assoc($resultado);
		   
  $consulta= "SELECT * FROM alumno
            WHERE ID=".$_REQUEST["idUsuario"]."				
			";

           $resultado= mysqli_query($conexion,$consulta);
           $con2 = mysqli_fetch_assoc($resultado);
  
  $consulta= "SELECT * FROM libro
            WHERE ID_LIBRO=".$_REQUEST["idLibro"]."				
			";

           $resultado= mysqli_query($conexion,$consulta);
           $con3 = mysqli_fetch_assoc($resultado);
  
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
            <h1 class="logo"><span>A</span>ctualizar <span>R</span>eserva</h1>
            <br>

            
                <div class="contact-form">
                    
                    <form action="updateAlum.php" method="post" >
                        
						<div class="campo">
						    <label>ID Reserva</label></br> 
						    <input readonly type="text" name="idAlum" placeholder="Id Alumno" value="<?php if(isset($con['ID_Reserva'])): echo $con['ID_Reserva']; endif; ?>">					
						</div>            
						<div class="campo">
                            <label>Titulo</label>
                            <input type="text" name="contra" placeholder="Contraseña" value="<?php if(isset($con3['Titulo'])): echo $con3['Titulo']; endif; ?>">
                        </div>
						<div class="campo">
                            <label>ID Usuario</label>
                            <input readonly type="text" name="nombre" placeholder="Nombre" value="<?php if(isset($con['ID'])): echo $con['ID']; endif; ?>">
                        </div>
                   		 <div class="campo">
                            <label>Fecha Entrega</label>
                            <input type="text" name="facultad" placeholder="Facultad" value="<?php if(isset($con['Fe_Devo'])): echo $con['Fe_Devo']; endif; ?>">
                        </div>				
						<div class="campo">
                            <label>Usuario</label>
                            <input type="text" name="usuario" placeholder="Usuario" value="<?php if(isset($con2['Usuario'])): echo $con2['Usuario']; endif; ?>">
                        </div>
						<div class="campo">
                            <label>Fecha Reserva    </label>
                            <input type="text" name="correo" placeholder="Correo" value="<?php if(isset($con['Fe_Reserva'])): echo $con['Fe_Reserva']; endif; ?>">
                        </div>
						<div class="campo">
                            <label>Codigo Libro</label>
                            <input type="text" name="apellido" placeholder="Apellidos" value="<?php if(isset($con['ID_LIBRO'])): echo $con['ID_LIBRO']; endif; ?>">
                        </div>
                        
						
						
                       <div class="btn-enviar">
						   <input type="submit" value="Enviar"/>
						   <input type="reset" value="Borrar todo"/>
						</div>
                    </form>
                </div>
            

        </div>
    </div>


 <footer>
        <?php include "../footer/footer.php"; ?>

   </footer>


</body>
</html>
