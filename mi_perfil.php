<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mi Perfil</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<!--<link rel="stylesheet" type="text/css" href="Styles.css">-->
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="responsive" columnas-iguales>  
  <?php include 'header.php'; ?>
  <?php 
  	//session_start();
  	$nombre = $_SESSION['usuario'];
  	$id = $_SESSION['id'];
	
	if(isset($_POST['boton3'])){
		session_unset();
		session_destroy(); ?>
		<script type="text/javascript">
			alert("has cerrado sesion.") ;
			window.location.href = "index.php";
		</script>
	<?php 	
	}
  ?>
  <?php include 'conexion.php';  
  	//echo $varsesion;
  	//echo $varid;
  	$sql = "SELECT correo,password,fecha_union FROM cliente WHERE id = '$id'";		
	$resultado = mysqli_query($con,$sql);
	$row = $resultado->fetch_assoc();
	$correo = utf8_decode($row['correo']);
	$pass = utf8_decode($row['password']); 
	$fecha = utf8_decode($row['fecha_union']);

	mysqli_free_result($resultado);
  ?>

 <!--<div class="contenedor">-->
  	<div class="izquierda">
  	   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  name="formulario" method="POST" class="izquierda">
	  	  <img src="img/user.png"><br><br>	
	  	  <input type="submit" name="boton" value="Cambiar Mi información"><br>
	  	  <br><input type="submit" name="boton2" value="Historial de compras"><br>
		  <br><input type="submit" name="boton3" value="Cerrar Sesión"><br>
	   </form>  
	</div>  
	<div class="derecha">
		  <br><h2><center><?php echo $nombre; ?></center></h2><br><br>
		  <h3>Numero de cliente: #<?php echo $id; ?></h3><br>
		  <h3>Correo Electronico: <?php echo $correo ?></h3><br>
		  <h3>Contraseña: <?php echo $pass; ?></h3><br><br>
		  <h3>Te has unido el: <?php echo $fecha; ?></h3><br>
	</div><br>
<!--</div>-->
	<style type="text/css">
		/*.contenedor{
			padding: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: #b7C865;
		}*/
		.izquierda{
			float: left;
			margin-left: -4.5em;
			width: 171px;
			height: 440px;
			background-color: #E7E7E7;
		}
		.derecha{
			margin-left: 19em;
			background-color: #fff;
		}   

		.derecha > h2{
			font-size: 26px;
			color: #A10235;
		}

		.izquierda > img{
			margin-top: 10px;
			padding-left: 40px;
		}
		.izquierda > input{
			align-content: center;			
			width: 230px;
			height: 40px;
			background-color:#A10235;
			font-size: 16px;
			text-align: center;
			color: #fff;
			cursor: pointer;	
		}
	</style>
	<br><br><?php include 'footer.php'; ?>	
  </div>
</body>
</html>