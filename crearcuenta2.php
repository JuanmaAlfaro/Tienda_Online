<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crear Cuenta</title>
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
	   	$nombre = $_POST['nombre'];
	   	$apellido = $_POST['apellido'];
	   	$correo = $_POST['correo'];
	   	$password = $_POST['password'];
	   	$password2 = $_POST['password2'];
	   }
	?>

	<section class="formulario-sesion">
		<img class="imagen-user" src="img/user.png" ><br>
		<h1 >Unete a DECARTON</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST" onsubmit="return validar();">

			<label for="nombre">Nombre</label><br>
			<input type="text" name="nombre" id="nombre" placeholder="Ingresa tu Nombre(s)" value="<?php if(isset($nombre)){ echo $nombre;} ?> " required><br>

			<label for="apellido">Apellido</label><br>
			<input type="text" name="apellido" id="apellido" placeholder="Ingresa tu Apellido(s)" value="<?php if(isset($apellido)){ echo $apellido;} ?>" required><br>

			<label for="correo">Correo Electronico</label><br>
			<input type="email" name="correo" id="correo" placeholder="Ingresa tu Correo Electronico" value="<?php if(isset($correo)) {echo $correo;} ?>" required><br>

			<label for="password">Contraseña</label><br>
			<input  type="password" name="password" id="password" placeholder="Crea tu Contraseña" required>

			<label for="password2">Confirmar Contraseña</label><br>
			<input  type="password" name="password2" id="password2" placeholder="Ingresa tu Contraseña de nuevo" required>
			<br><br>
			<label>Acepto terminos y condiciones.<input type="checkbox" id="terminos" name="terminos" value="check" required></label><br>
			<input class="icono-sesion" type="submit" name="boton" id="btn-crear" value="Crear Cuenta"><br>
				   
			<script src="validar_JS.js" type="text/javascript"></script>
			   <?php include 'conexion.php'; ?>
			   <?php	

			   include 'validar.php';
			   	if($enviar){
			   		$sql= "INSERT INTO cliente VALUES (NULL,'$nombre','$apellido','$correo','$password',CURRENT_TIMESTAMP)";	
					$ejecutar = mysqli_query($con,$sql);
					if(!$ejecutar){
						//echo "ha ocurrido algun error"; ?>
						<script type="text/javascript">
							alert("Ha ocurrido un error.") ; 
						</script>
					<?php	
					}
					else{ ?>
						<script type="text/javascript">
							alert("Datos registrados, inicia sesion para terminarel proceso.") ; 
						    window.location.href = "sesion.php";
						</script>

					<?php
						//header("Location:sesion.php");
					  }
				  }

				  //mysql_close($con);
			  ?>		
		</form>	
	</section>	
    <br><br><br>
    <?php include 'footer.php'; ?>	
	</div>
</body>
</html>