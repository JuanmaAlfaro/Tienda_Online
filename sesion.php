<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Iniciar Sesión</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="responsive">
	<?php 
	error_reporting(0);
	include 'header.php'; ?>
	
	<br><br>

	<?php
	  if(isset($_POST['boton'])){
	  	$correo = $_POST['correo'];
	   	$password = $_POST['password'];
	  }

	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario-sesion" name="form-sesion" method="POST">
		<img class="imagen-user" src="img/user.png" ><br>
		<h1 >Iniciar Sesión</h1>
		<label for="correo">Correo Electronico</label><br>
		<input type="email" name="correo" id="correo" placeholder="Ingresa tu correo">
		<img src="img/user2.png" alt="usuario"><br>
		<label for="password">Contraseña</label><br>
		<input  type="password" name="password" id="password" placeholder="Ingresa tu Contraseña">
		<img src="img/pass.png" alt="contraseña"><br><br>
		<input class="icono-sesion" type="submit" name="boton" value="Iniciar Sesión"><br>
		<a href="crearcuenta2.php">¿No tienes cuenta? Haz Click para crear una</a>

		<?php include 'conexion.php'; //conectar a la BD ?>
			   <?php
			   //Validar	
			   $enviar = false;
				if(isset($_POST['boton'])){
					$enviar = true;
					if(empty($correo)){?>
						<script type="text/javascript">
						  alert("Olvidaste ingresar tu correo electronico."); 
						</script>
				    <?php $enviar = false;
					}
					elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){?>
						<script type="text/javascript">
						  alert("Correo no valido."); 
						</script>
					<?php $enviar = false;
					}
					if(empty($password)){ ?>
						<script type="text/javascript">
						  alert("Olvidaste ingresar tu contraseña."); 
						</script>
					<?php	$enviar = false;
					}
				}

			   	if($enviar){
			   		$sql = "SELECT * FROM cliente WHERE correo = '$correo' and password = '$password'";		
					$ejecutar = mysqli_query($con,$sql);
					$filas = mysqli_num_rows($ejecutar);

					if($filas > 0){ 
						$sql = "SELECT id,nombre,apellido FROM cliente WHERE correo = '$correo'";		
					    $resultado = mysqli_query($con,$sql);
					    $row = $resultado->fetch_assoc();
					    $id = utf8_decode($row['id']);
					    $nombre = utf8_decode($row['nombre']);
					    $apellido = utf8_decode($row['apellido']);
					    $usuario = $nombre." ".$apellido;
						session_start();
						$_SESSION['id'] = $id;
						$_SESSION['usuario'] = $usuario;
						?>
						<script type="text/javascript">
							alert("has iniciado sesion.") ;
							window.location.href = "index.php";
						</script>
					<?php	
					}
					else{ ?>
						<script type="text/javascript">
							alert("Usuario no registrado. *revise su correo electronico y contraseña") ; 
						</script>

					<?php
						
					  }
					mysqli_free_result($ejecutar);  
				  }
			  ?>

	</form>
	<br><br><br>
	<?php include 'footer.php'; ?>
	</div>
</body>
</html>