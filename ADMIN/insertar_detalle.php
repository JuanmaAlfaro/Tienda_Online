<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Detalle de pedido</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <form>
            <label for="">id orden</label>
            <input type="number" name="idO">
            <label for="">id producto</label>
            <input type="number" name="idP">
            <label for="">Cantidad</label>
            <input type="number" name="cant">
            <label for="">Precio</label>
            <input type="number" name="precio">
            <input type="submit" name="btn" value="Agregar">
            <a href="detalle.php">Regresar</a>
        </form>
    </div>
    <?php 
        include 'conexion.php';
        if(isset($_GET['btn'])){
            $idO = $_GET['idO'];
            $idP = $_GET['idP'];
            $cant = $_GET['cant'];
            $precio = $_GET['precio'];
            if(empty($idO) || empty($idP) || empty($cant) || empty($precio)){
                echo "<br><br>**Datos no validos**";
            }
            else{
                $sql= "INSERT INTO pedido_detalle VALUES (NULL,'$idO','$idP','$cant','$precio')";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:detalle.php');
                }
            }
        }
    ?>
    
</body>
</html>