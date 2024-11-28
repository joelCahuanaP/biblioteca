<!DOCTYPE html>
<html>
<head>
 <title>Login - Externo</title>
 	
    <link rel="stylesheet" href="../css/estilos-alumno.css">
 </head>
 <body>
	<main>
		    <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="user" placeholder="Usuario">
                        <input type="password" name="pass" placeholder="Contraseña">
                        <button type="submit" name="btnEntrar">Entrar</button>
                    </form>

                  <?php
				   
				   include("../conexion/conexion.php");
				   
				   session_start();
				   
				   if (isset($_POST['btnEntrar'])){
				   
				    $usuario=$_POST['user'];
					$contra=$_POST['pass'];
					
					$consulta="SELECT Usuario, Contraseña FROM usuario WHERE Usuario='$usuario' AND Contraseña ='$contra'";
					
					$resultado= mysqli_query($conexion,$consulta);
					$num_row = mysqli_num_rows($resultado);
					
					if($num_row > 0){
						
						$row = mysqli_fetch_array($resultado);
						$_SESSION["id"]= $row['Usuario'];
						
						header("location: ../index.php");
						
					}else{
						echo "<script>";
						echo "alert('Usuario o contraseña incorrecta! Intentelo de nuevo...')";
						echo "</script>";
					}  
				   
				   }
				
				?>
                   
                    <!--Register-->
					
                    <form action="bienvenidaExterno.php" method="post"  class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre">
						<input type="text" name="apellidos" placeholder="Apellidos ">
						<input type="text" name="dni" placeholder="Dni">
                        <input type="text" name="correo" placeholder="Correo Electronico">
						<input type="text" name="procedente" placeholder="Universidad Procedencia">
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="contra" placeholder="Contraseña">
                        <input type="text" name="telefono" placeholder="Telefono">
						<input id="env" type="submit" value="Registrar" >
                    </form>
                </div>
            </div>
	</main>
	<script src="../js/scriptexterno.js"></script>
 </body>
 </html>