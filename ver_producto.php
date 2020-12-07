<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewpo
	rt" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Producto </title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<?php 
session_start(); 
error_reporting(0);
?>
<?php include 'conexion.php'; ?>
<?php 

$id = $_SESSION['carrito'];

/*function getId()
{
	$GLOBALS['clave'] = $GLOBALS['id'];	
}*/
  	
?>

<?php
  //$idProducto = getId();
  $sql = "SELECT * FROM producto WHERE id ='$id'";		
  $ejecutar = mysqli_query($con,$sql);
  $row = $ejecutar->fetch_assoc();
  $idProducto = utf8_decode($row['id']);
  $nombre = utf8_decode($row['nombre']);
  $desc = utf8_decode($row['descripcion']);
  $precio = utf8_decode($row['precio']);
  $stock = utf8_decode($row['almacen']);
  $_SESSION['carrito'] = $idProducto;
  $cantidad = true;
  if($stock == 0){
  	$stock = '*Articulo no disponible.';
  	$cantidad = false;
  }
  $src = utf8_decode($row['imagen']);
  mysqli_free_result($ejecutar);

?>

<body>
  <div class="responsive" columnas-iguales>  
  <?php include 'header.php'; ?>
  <div class="info">
	  <img src="<?php echo $src; ?>">
	  <h2><?php echo $nombre; ?></h2><br>
	  <h3><?php echo $desc; ?></h3><br>
	  <h3>$ <?php echo $precio; ?></h3><br>
	  <h3>Stock: <?php echo $stock; ?></h3><br>
   </div>	  
  <?php if($cantidad){?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST" class="form">

	   <h3>Cantidad </h3>
	   <input type="number" id="cantidad" value="1" name="cantidad" min="1" max="<?php echo $stock; ?>"><br>
	   <br><h3>Talla</h3>
	   <input type="radio" name="talla" value="1">S &nbsp; &nbsp;
	   <input type="radio" name="talla" value="2" checked>M &nbsp; &nbsp;
	   <input type="radio" name="talla" value="3">L &nbsp; &nbsp;
	   <input type="radio" name="talla" value="4">XL<br><br>
	   <div class="btn-rojo">
	      <input type="submit" name="btn-carrito" value="Añadir al Carrito" class="btn-rojo">
	   </div>
   </form><br><br><br><br><br><br><br><br><br><br>
   <?php include 'footer.php'; ?>
   <style type="text/css">
   	 .info{
   	 	float: left;
   	 	font-size: 18px;
   	 }
   	 .info > h2{
   	 	font-size: 22px;
   	 	color: #A10235;
   	 }
   	 .info > img{
   	 	width: 250px;
   	 	height: 250px;
   	 	object-fit: cover;
   	 }
   	 .form{
   	 	padding-top: 40px;
   	 	padding-left: 800px;
   	 	font-size: 18px;
   	 	color: #A10235;
   	 }
   	 .form > input{
   	 	width: 80px;
   	 	height: 20px;
   	 }
   	 .btn-rojo{
   	 	width:180px;
   	 	height: 50px;
		background-color:  #A10235;
	    font-size: 22px;
	    color: #fff;
	    text-align: center;
	    cursor: pointer;
   	 }
   	 
   </style>		
  <?php 
  //echo $idProducto;
  }
 ?>

 <?php 
	if(isset($_POST['btn-carrito'])){
         $cant = $_POST['cantidad'];
	 	 $cant += 0;
	 	 if(!isset($_SESSION['usuario'])){
	 	 	?>
	 		<script type="text/javascript">
				alert("¡Debes Iniciar Sesión Para Agregar Productos al Carrito!") ;
			window.location.href = "sesion.php";	
			</script>
		  <?php	
	 	 }
	 	 else{
	 	 		$clave = $_SESSION['carrito'];
	 	 		$usuario = $_SESSION['id']; 
		 		$sql= "INSERT INTO `carrito` (`id`, `id_usuario`, `id_producto`, `cantidad`) VALUES (NULL, '$usuario',   '$clave', '$cant');";
		 		$ejecutar = mysqli_query($con,$sql);
		 		if(!$ejecutar){?>
		 		   <script type="text/javascript">
					alert("Ha Ocurrido Un Error.") ;
				   </script>	
		 		<?php	
		 		}
		 		else{ ?>
		 			<script type="text/javascript">
					  alert("Producto Agregado al Carrito.") ;
					  window.location.href = "carrito.php";
				   </script>
				<?php
		 		}	
	 	    }	
	 }
	 
  ?>

  </div>					
</body>
</html>