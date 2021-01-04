<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div>
        <form>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="">Descripcion</label>
            <input type="text" name="desc" id="desc" required>
            <label for="">Precio</label>
            <input type="number" name="precio" id="precio" required>
            <label for="">Almacen</label>
            <input type="number" name="almacen" id="almacen" required>
            <label for="">Imagen</label>
            <input type="text" name="imagen" id="imagen" required>
            <input type="submit" name="btn" value="Agregar" id="boton">
            <a href="producto.php">Regresar</a>
        </form>
    </div>
    <?php 
        include 'conexion.php';
        if(isset($_GET['btn'])){
            $nombre = $_GET['nombre'];
            $desc = $_GET['desc'];
            $precio = $_GET['precio'];
            $almacen = $_GET['almacen'];
            $imagen = $_GET['imagen'];
            if(empty($nombre) || empty($desc) || empty($precio)||
               empty($almacen) || empty($imagen)){
                    echo "<br>**valores no validos**";
               }
            else{
                $sql= "INSERT INTO producto VALUES (NULL,'$nombre',
                '$desc','$precio','$almacen','$imagen')";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:producto.php');
                }
            }
        }
    ?>
    
</body>
</html>