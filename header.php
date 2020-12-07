<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Header</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<?php 
     error_reporting(0);
	 session_start();
	 
	 if(!isset($_SESSION['usuario'])){
	 	$cadena = 'Iniciar Sesión';
	 	$pagina = 'sesion.php';
	 }
	 else{
	 	$cadena = 'Mi Cuenta';
	 	$pagina = 'mi_perfil.php';
	 }
?>
<body>
<section class="quienes-somos-menu">
		<nav>
			<div class="menu">
				<a href="index.php"><img class="logo-somos" src="img/DECARTON3.png" alt="DECARTON"></a>
				<nav>
					<a href="index.php">Inicio </a>
					<a href="quienes_somos.php"> Quienes Somos </a>
					<a href="Catalogo.php"> Catálogo </a>
					<img src="img/userimage.png" class="user-image">
					<?php echo "<a href=".$pagina.">".$cadena."</a>" ?>
				</nav>	
			</div>
		</nav>	
	</section>
</body>	
</html>
