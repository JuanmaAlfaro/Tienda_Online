<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Usuario</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<br><br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">
		Usuario&nbsp; <input type="text" name="usuario" placeholder="usuario" required><br>
		Contraseña &nbsp;<input type="password" name="pass" placeholder="Contraseña" required><br><br>
		<input type="submit" name="btn" value="ingresar">
	</form>
	<?php
	$usuario = "admin";
    $password = "1234";

    if(isset($_POST['btn'])){
		$user = $_POST['usuario'];
    	$pass = $_POST['pass'];

	 	if($usuario == $user && $password == $pass){?>
	    	<script type="text/javascript">
		   		alert("¡Bienvenido!");
		   		window.location.href = "admin.php";
	    	</script>
	  	<?php
	  	}
    	else { ?>
			<script type="text/javascript">
				alert("¡Datos Incorrectos!");
			</script>
 		<?php
		}
	}		 
?>
</body>
</html>