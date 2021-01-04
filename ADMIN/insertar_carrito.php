<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Carrito</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <form>
            <label for="">id_usuario</label>
            <input type="number" name="idU" required>
            <label for="">id_producto</label>
            <input type="number" name="idP" required>
            <label for="">cantidad</label>
            <input type="number" name="cant" required>
            <input type="submit" name="btn" value="Agregar">
            <a href="carrito.php">Regresar</a>
        </form>
    </div>
    <?php 
        include 'conexion.php';
        if(isset($_GET['btn'])){
            $idU = $_GET['idU'];
            $idP = $_GET['idP'];
            $cant = $_GET['cant'];
            if(empty($idU) || empty($idP) || empty($cant)){
                echo "<br><br>**Datos no validos**";
            }
            else{
                $sql= "INSERT INTO carrito VALUES (NULL,'$idU','$idP','$cant')";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:carrito.php');
                }
            }
        }
    ?>
    
</body>
</html>