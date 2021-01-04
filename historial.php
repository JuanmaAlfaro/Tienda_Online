<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compras</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<style type="text/css">
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
</style>
<?php 
    include 'conexion.php'; 
    include 'header.php';
    $nombre = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM pedido WHERE id_usuario = '$id'";
    $resultado = mysqli_query($con,$sql);
?>
<body>
    <br><br><table>
        <thead>
            <tr class="encabezado">
                <th>Numero de Compra</th>
                <th>Metodo de Pagp</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr class="info">
                    <td><?php echo $filas['id']; ?></td>
                    <td><?php echo $filas['metodo_pago']; ?></td>
                    <td><?php echo $filas['total']; ?></td>
                </tr>
             <?php } ?>
        </tbody>
    </table><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>
</body>
</html>