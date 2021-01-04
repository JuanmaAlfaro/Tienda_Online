<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include 'conexion.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM producto WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idP" value ="<?php echo $fila['id'] ?>" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" value ="<?php echo $fila['nombre'] ?>" required>
            <label for="">Descripcion</label>
            <input type="text" name="desc" value ="<?php echo $fila['descripcion'] ?>" required>
            <label for="">Precio</label>
            <input type="number" name="precio" value ="<?php echo $fila['precio'] ?>" required>
            <label for="">Almacen</label>
            <input type="number" name="almacen" value ="<?php echo $fila['almacen'] ?>" required>
            <label for="">Imagen</label>
            <input type="text" name="img" value ="<?php echo $fila['imagen'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="producto.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idP'];
            $nombre = $_GET['nombre'];
            $desc = $_GET['desc'];
            $precio = $_GET['precio'];
            $almacen = $_GET['almacen'];
            $img = $_GET['img'];
            $sql2= "UPDATE producto SET nombre = '$nombre' , 
            descripcion = '$desc', precio = '$precio', 
            almacen  = '$almacen', imagen = '$img' WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:producto.php');
            }
        }
    ?>
</body>
</html>