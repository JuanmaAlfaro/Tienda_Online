<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contacto</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="responsive">
	<?php include 'header.php'; ?>
	<section class="formulario">
		<h1 >¿Como podemos ayudarte?</h1>
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre" id="nombre" placeholder="Ingresa tu Nombre"><br>
		<label for="correo">Correo Electronico</label><br>
		<input type="email" name="correo" id="correo" placeholder="Ingresa tu Correo"><br>
		<label for="telefono">Telefono</label><br>
		<input type="tel" name="telefono" id="telefono" placeholder="Ingresa tu Telefono Celular"><br>
		<label for="mensaje">Mensaje</label><br>
		<textarea id="mensaje" placeholder="Escribe tu mensaje"></textarea><br>
		<input class="boton-enviar" type="submit" name="boton"><br>
	</section>
	<br><br>
	<?php include 'footer.php'; ?>
	</div>	
</body>
</html>