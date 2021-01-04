<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gracia por tu compra</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<style type="text/css">
  	.boton{
  		width:180px;
   	 	height: 50px;
		background-color:#fff;
		margin-left: 50px;
	    font-size: 22px;
	    color: #A10235;
	    text-align: center;
	    cursor: pointer;
	}
	.boton:hover{
		background-color:#A10235;
	   font-size:24px;
	   color:#fff;
	}
	.info>td{
		padding-left: 50px;
		font-size: 18px;
		text-align:center;
	}
	.encabezado>th{
		padding-left: 50px; 
		font-size: 24px;
		color: #A10235;
		text-align:center;
	}
	.detalle{
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
<?php session_start(); ?>
<?php include 'conexion.php'; ?>
<body>
	<?php include 'header.php'; 
	 $ped = $_SESSION['pedido'];
	 $suma = 0;
	?>
		<br>
		<h2 class="titulo">Gracias por tu compra. Tu pedido llegara en 10 días habiles (máximo).<br>
		Numero de Pedido:<?php echo " ".$ped; ?></h2><br>
		<h3 class="detalle">Detalle:</h3><br>
	<table>
	   <thead>
	   	  <tr class="encabezado">	
			<th><?php echo "ID";?></th>
			<th><?php echo "Nombre"?></th>
			<th><?php echo "Cantidad"; ?></th>
			<th><?php echo "Precio"; ?> </th>
		  </tr>	
		</thead>	
		<tbody>	
    <?php 
		 $sql = "SELECT * FROM pedido_detalle WHERE id_orden = '$ped'";
		 $resultado = mysqli_query($con,$sql);
         while($row = mysqli_fetch_assoc($resultado)){
         	$id = $row['id_producto'];
         	$cant = $row['cantidad'];
			$precio = $row['precio'];
			$tot = $cant * $precio;
			$suma += $tot; 
			$sql2 = "SELECT * FROM producto WHERE id = '$id'";
			$resultado2 = mysqli_query($con,$sql2); 
			$row2 = mysqli_fetch_assoc($resultado2);
			$nombre = $row2['nombre'];
			 ?>
			 <tr class="info">
				<td><?php echo $id; ?></td>
				<td><?php echo $nombre ?></td> 
				<td><?php echo $cant; ?></td>
				<td>$<?php echo $precio; ?></td> 
			 </tr>
    	 	<?php } ?>
		 </tbody>	 
	</table>
	<div class="total"> 
  	 	<?php echo "<br>Total a Pagar: $".$suma;?><br><br> 
  	 </div> 
	<br>
    <button class="boton"onclick="imprimir();">Imprimir</button>
	<script type="text/javascript">
    	function imprimir() {
			window.print();
			//return false;
    	}
    </script>
	<br><br>
	<?php include 'footer.php'; ?>
    
</body>
</html>