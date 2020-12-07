<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mi Carrito</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="responsive" columnas-iguales>  
  <?php 
  error_reporting(0);
  include 'header.php'; ?>
  <?php include 'conexion.php'; ?>
  <h1 class="titulo">Productos</h1>
  <?php
  $usuario = $_SESSION['id'];
  $sql = "SELECT * FROM carrito WHERE id_usuario = '$usuario'";		
  $ejecutar = mysqli_query($con,$sql);
  $filas = mysqli_num_rows($ejecutar);
  if($filas>0){
  	$i = 0;
  	$suma = 0;?>

  	<div class="encabezado">
  	<?php echo "No."."&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "Producto"."&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "Precio Unitario"."&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "Cantidad"."&nbsp;&nbsp&nbsp;&nbsp;"; 
    echo "Precio total"."<br><br>";?>
    </div>
    
  <?php
  while($row = mysqli_fetch_assoc($ejecutar)){
  		$cantidad = $row['cantidad'];
  		$producto = $row['id_producto'];
  		$sql2 = "SELECT nombre, precio, imagen,almacen FROM producto WHERE id = '$producto'";
    	$ejecutar2 = mysqli_query($con,$sql2);
    	$row2 = $ejecutar2->fetch_assoc();
    	$precio = $row2['precio'];
    	$nombre = $row2['nombre'];
    	$imagen = $row2['imagen'];
    	$stock = $row2;
    	$arreglo[$i]['idProducto'] = $producto;
    	$arreglo[$i]['precio'] = $precio;
    	$arreglo[$i]['cantidad'] = $cantidad;
    	$tot = $cantidad * $precio;
    	$suma += $tot; 
    	$i++;
    	?>
    	<div class="info">
	    	<?php echo $i; ?> &nbsp; &nbsp;&nbsp; &nbsp;
	    	<?php echo $nombre; ?>&nbsp; &nbsp;&nbsp; &nbsp;
	    	$<?php echo $precio; ?> &nbsp; &nbsp;&nbsp; &nbsp;
	    	<?php echo $cantidad; ?>&nbsp; &nbsp;&nbsp; &nbsp;
	    	$<?php echo $tot; ?>
        </div>
    	<br>
      <?php	
  	  }?>
  	 <div class="total"> 
  	 	<?php echo "<br>Total a Pagar: $".$suma;?><br><br> 
  	 </div>
  	 <form action="comprar.php" name="formulario" method="POST">
  	   <input type="submit" name="btn" value="Comprar" class="boton-com">
  	</form>
  	<br><br>
  	<?php include 'footer.php'; ?>
  	<style type="text/css">
  	.boton-com{
  		width:180px;
   	 	height: 50px;
		background-color:  #A10235;
		margin-left: 50px;
	    font-size: 22px;
	    color: #fff;
	    text-align: center;
	    cursor: pointer;
	}
	.info{
		padding-left: 50px;
		font-size: 18px;
	}
	.encabezado{
		padding-left: 50px; 
		font-size: 24px;
		color: #A10235;
	}
	.total{
		padding-left: 50px;
		font-size: 24px;
		color: #A10235;
	}
  	</style>
  <?php
   $_SESSION['infoProducto'] = $arreglo;
   $_SESSION['total'] = $suma;
  }	
  else{?>
    <h2>No Hay Productos en el Carrito<h2>
  <?php  
  }
  ?> 	
  </div>
</body>
</html>