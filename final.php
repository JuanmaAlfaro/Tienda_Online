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
<?php session_start(); ?>
<?php include 'conexion.php'; ?>
<body>
	<?php include 'header.php'; 
     $ped = $_SESSION['pedido'];
	?>
	Gracias Bro. Tu pedido llegara en 10 días habiles (máximo).<br>
	Numero de Pedido:<?php echo " ".$ped; ?><br>
	Detalle:<br>
	<?php echo "id producto";?>&nbsp; &nbsp;
    <?php echo "cantidad"; ?>&nbsp; &nbsp;
     $<?php echo "precio"; ?><br> 	
    <?php 
		 $sql = "SELECT * FROM pedido_detalle WHERE id_orden = '$ped'";
		 $resultado = mysqli_query($con,$sql);
         while($row = mysqli_fetch_assoc($resultado)){
         	$id = $row['id_producto'];
         	$cant = $row['cantidad'];
         	$precio = $row['precio'];?>
         	<?php echo $id; ?>&nbsp; &nbsp;
         	<?php echo $cant; ?>&nbsp; &nbsp;
         	$<?php echo $precio; ?> 
    		<br>
    	 <?php
         }
    ?>
    <input type="submit" name="btn" value="Imprimir" onclick="imprimir()">
    <script type="text/javascript">
    	function imprimir(){
    		Window.print();
    	}
    </script>
</body>
</html>