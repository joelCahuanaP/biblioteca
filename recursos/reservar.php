<?php 

 include("../conexion/conexion.php");

   session_start();
    if(isset($_SESSION['tex'])&& isset($_SESSION['cod'])){
   $us=$_SESSION["cod"];
   $user=$_SESSION["id"];
   $texto=$_SESSION['tex'];}
  
  
?>




<!DOCTYPE html>
<html>
<head>
 <title>Reservas.</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="menu,enlaces"/>
<meta name="Description" content="menu enlaces. enlaces biblioteca"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
<link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/estilo-catalogo.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 <link rel="stylesheet" href="../css/estilo-reserva.css">
  

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
      <p>|  RESERVAR  |</p>
   </div> 
   
</header>
 
 
<div class="contenedor-reserva">

  	
	 
	   <div class="insetDetalle">
	   
	   <form action="insertarReserva.php" method="post" >
	   
	     <table>
		    <tr>
	           <th > <p> Usuario:&nbsp;&nbsp;</p></th>
               <th><input class="camp" readonly type="text" name="usuario" size="30" placeholder="usuario" value="<?php if(isset($user)): echo $user; endif; ?>"/></th>
            </tr>
			<tr>
			    <th > <p>Codigo Usuario:</p></th>
				<th><input class="camp" type="text" name="idUser" size="30" placeholder="Codigo Usuario"/></th>
		     </tr>
		 </table>

	         <table id="campDetalle" border="2" cellspacing="0" >
                <tr>                     
                    <th id="celd">Codigo</th>                  
                    <th id="celd">Fecha recojo</th>
                    <th id="celd">Fecha devolución</th>
                    <th id="celd">Estado</th>
                </tr>
  
                <tr>		 		
                         
                    <td ><input id="codigo" type="text" name="idLibro" size="14" placeholder="Codigo"/></td>
                    <td ><input id="recogo" type= "date" name = "Fentrega"/></td>
                    <td ><input id="devolver" type= "date" name = "Fdevolucion"/></td>
                    <td> <select id="estado">
                    <option>Disponible</option> </td>
                         </select>
                </tr>  
             </table>
			 <br>
			 <center>
			         <input id="butt" type="submit" value="Enviar"/>
					 <input id="butt"  type="reset"/> 
			        <!--<button id="boton" class="btn btn-success" type="reset" onclick="capturar();">Agregar</button> -->
			</form>	
	   </div>
	   
	   <br>
	   </br></br></br>
	   <div >
	    <center><h2>Mis Reservas</h2></center></br>
		<div class="registroReserva">
	     <table >
            <thead >
                <tr> 
                    <th id="celd"> &nbsp;  &nbsp;  &nbsp; ID Reserva &nbsp;  &nbsp;  &nbsp; </th>				
                    <th id="celd"> &nbsp;  &nbsp;  &nbsp; ID Usuario &nbsp;  &nbsp;  &nbsp; </th>	
					<th id="celd"> &nbsp;  &nbsp;  &nbsp; Codigo Libro &nbsp;  &nbsp;  &nbsp; </th>
                    <th id="celd"> &nbsp;  &nbsp;  &nbsp; Fecha recojo &nbsp;  &nbsp;  &nbsp; </th>
                    <th id="celd"> &nbsp;Fecha devolución&nbsp; </th>					
                </tr>
            </thead>
            <tbody>
              <?php 
				  
				 $consulta= "SELECT * FROM reserva
			LEFT JOIN usuario ON reserva.ID=usuario.ID
			LEFT JOIN libro ON reserva.ID_LIBRO=libro.ID_LIBRO
            WHERE reserva.ID=$us			
			";
            $resultado= mysqli_query($conexion,$consulta);
             			
			    while($row=mysqli_fetch_array($resultado)){		//listado de los reservas	
			?>   
             <tr>
			    <td><?php echo $row['ID_Reserva']?></td>
				<td><?php echo $row['ID']?></td>
				<td><?php echo $row['ID_LIBRO']?></td>
				<td><?php echo $row['Fe_Reserva']?></td>
				<td><?php echo $row['Fe_Devo']?></td>
			</tr>
            <?php }?>

			 </tbody>
        </table>
		<div>
	   </div>
	
</div>

	
	
<footer>
       
       
        
 </footer>
</body>
</html>