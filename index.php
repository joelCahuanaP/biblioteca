<?php
   include('conexion/conexion.php');
   session_start();
   
   if(isset($_SESSION["id"])){
	     
        $user = $_SESSION["id"];
   
        $consulta= "SELECT Usuario FROM usuario wHERE Usuario = '$user'";
        $resultado= mysqli_query($conexion,$consulta);
   
        $fila = mysqli_fetch_array($resultado);
  
        $uss  = $fila['Usuario'];
   
        $texto = " | " ."Usuario: " .$uss;
		$_SESSION['tex']=$texto;
   
   }	
   
?>


<!DOCTYPE html>
<html>
<head>
 <title>Biblioteca UNFV-FISS.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="css/estilos-footer.css">
<link rel="stylesheet" href="css/estilo-header.css">
<link rel="stylesheet" href="css/estilo-inicio.css">

 
 </head>
 
 <body bgcolor=white>
 
 <header>
    
	<div class="div-header">
     <img class="icono" src="imagenes/logo.png" alt="logo"/>
     <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>
   
     <div class="sesion">
       <ul>
         <li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='login/salir.php' >Cerrar Sesion</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "<a class='boton' href='login/menuregistro.php' >Iniciar Sesion</a>";
				  echo "</html>";
			  }  ?></li>
		 <li><?php if(isset($texto)) {echo $texto;} ?></li>
       </ul>
     </div>
   </div>
   
   
   <div class="div-header menu">
   <nav class="navbar">
       <div class="enlaces">
	     <ul class="nav">
		    <li><a href="index.php">Inicio</a></li>
			<li><a href="">Nosotros</a>
			    <ul>
				    <li><a href="nosotros/misionyvision.php">Mision-Vision</a></li>
					<li><a href="nosotros/reseña.php">Reseña Historia</a></li>
					<li><a href="nosotros/himno.php">Himno</a></li>
					<li><a href="nosotros/personal.php">Personal</a></li>
				</ul></li>
			<li><a href="">Servicios en Linea</a>
			    <ul>
				    <li><a href="recursos/catalogo.php" target="_self">Catalogo en Linea</a></li>
					<li><a href="recursos/basedatos.php" target="_self">Base de Datos</a></li>
				</ul></li>
			<li><a href="recursos/repositorio.php">Repositorio Institucional</a></li>
			<li><a href="http://biblioteca.unfv.edu.pe/opac-tmpl/bootstrap/images/REGLAMENTO%20DEL%20SISTEMA%20DE%20BIBLIOTECAS%20UNFV..pdf" target="_blank">Reglamento</a></li>
			<li><?php if(isset($texto)){
			   echo "<html>";
			   echo "<a class='boton' href='recursos/reservar.php' >Reserva</a>";
			   echo "</html>";
		      }else{
				  echo "<html>";
				  echo "";
				  echo "</html>";
			  } ?></li>
		 </ul>
	   </div> 
   </nav>
   </div>
   
  <div class="hero dibujo">
   
      <div class="mando-anterior diseño">
	  <input type="button" id="anterior" value="<<">
    </div>	
    <div class="mando-siguiente diseño">
	  <input type="button" id="siguiente" value=">>"></center>
	</div>
     <img id="imagen" src="imagenes/libro1.jpg" />
 
  </div>   
	
   
  <div class="div-header letra">
      <p>|  BIBLIOTECA  |</p>
  </div> 

<script type="text/javascript">
	 var arrayimg=["libro1.jpg","unfvdibujo2_.jpg","unfv2.jpg","bibliotecavirtual.jpg"]
	 var imgactual=0;
	 
	 document.getElementById("anterior").addEventListener("click",cambiarImagen);
	 document.getElementById("siguiente").addEventListener("click",cambiarImagen); 
	 
	 function cambiarImagen(){
	 var boton=this.id;
	 
	 if(boton='anterior'){
	    imgactual--;
		if(imgactual<0){
		   imgactual=arrayimg.length-1;
		}
	}else{
		 imgactual++;  
		 if(imgactual==arrayimg.length){
		   imgactual=0;
		  }
		 }
		 
	 var imgMostrar= arrayimg[imgactual];
     
     document.getElementById('imagen').src= 'imagenes/'+imgMostrar; 	 
	 }
	 </script> 
</header>

<div class="noticias">
<section class="contenido" >
   <p><b>|  NOTICIAS </b></p>
   
   <div class="lista-noticias">
  <div>
    <div class="noti">
	   <div>
	       <img src="imagenes/noticia/noticia1.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="noticia/noticia1.php" target="_blank">Avanzan acciones para licenciamiento de la carrera de Medicina</a>
	   </div>
	</div>
	
	<div class="noti">
	    <div>
	       <img src="imagenes/noticia/noticia2.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="noticia/noticia2.php" target="_blank">Rectora villarrealina participa en encuentro de universidades públicas</a>
	   </div>
	</div>
  </div>
  <div>
   <div class="noti">
	   <div>
	       <img src="imagenes/noticia/noticia3.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="noticia/noticia3.php" target="_blank">Se coordina con Ministerio de Educación recursos para mejoras institucionales</a>
	   </div>
	</div>
	
	 <div class="noti">
	   <div>
	       <img src="imagenes/noticia/noticia4.jpg" alt="ag2" width="288"/>
	   </div>
	   <div class="nom-noticia">
		   <a href="noticia/noticia4.php" target="_blank">Inauguran Sala de audiencias de Facultad de Derecho y Ciencia Política</a>
	   </div>
	</div>
	</div>
 </div>
   
</section>
  
<aside class="aside-apa">
  <div class="apa">
    <p>Citas y Referencias en APA</p>
  </div>
  <div class="dibujoapa">
    <a href="libros-pdf/apa.pdf" target="_blank"><img src="imagenes/apa.jpg"></a>
  </div></br></br>
  
  
   <div class="tutorial-titulo">
    <p>Tutorial</p>
  </div>
  <div class="tutorial-dibujo">
    <a href="manual/manual.pdf" target="_blank"> <img src="imagenes/manual.png"></a>
  </div>    
  
</aside>
</div>

<div>

 
  
<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion de la biblioteca</h1>

                    <p>La Universidad Nacional Federico Villarreal (UNFV) se creó 
					como Universidad Autónoma el 30 de octubre de 1963, 
					mediante ley número 14692, promulgada por el gobierno 
					constitucional del presidente Fernando Belaunde Terry.</p></br>
					<p>Reclamos</p>
					<center><a href="reclamaciones/reclamos.php"><img src="imagenes/reclamo.png"></a></center>
					

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
					    <a href="https://www.facebook.com/UNFV.EDU" target="0">
                        <img src="imagenes/facebook.png">
						</a>
                        <label>Siguenos en Facebook</label>
						
                    </div>
                    <div class="row">
					    <a href="https://twitter.com/unfvoficial?lang=es" target="0">
                        <img src="imagenes/twitter.png">
						</a>
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
					    <a href="https://www.instagram.com/unfvoficial/?hl=es" target="0">
                        <img src="imagenes/instagram.png">
						</a>
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
					    <a href="http://www.unfv.edu.pe/idiomas/" target="0">
                        <img src="imagenes/google-plus.png">
						</a>
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="row">
					    <a href="https://www.pinterest.es/pin/649855421200234434/" target="0">
                        <img src="imagenes/pinterest.png">
						</a>
                        <label>Siguenos en Pinteres</label>
                    </div>


                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="imagenes/house.png">
                        <label>Jr. Carlos Gonzáles 285 Urb. Maranga - San Miguel</label>
                    </div>

                    <div class="row2">
                        <img src="imagenes/smartphone.png">
                        <label>(+51) 748 0888</label>
                    </div>

                    <div class="row2">
                        <img src="imagenes/contact.png">
						
                         <label>occii@unfv.edu.pe</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2021 Todos los Derechos Reservados | <a href="">Equipo 8</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Biblioteca</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>
	</div>

</body>
</html>