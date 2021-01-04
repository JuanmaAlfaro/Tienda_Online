<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'conexion.php';
        $sql = "SELECT * FROM producto ";
        $resultado = mysqli_query($con,$sql);
    ?>
    <div>
        <a href= "admin.php">Regresar</a>&nbsp;&nbsp;&nbsp;
        <a href= "insertar_producto.php">Nuevo Producto</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Almacen</th>
                    <th>Imagen</th>
                    <th>Opciones</th>
                </tr>
            </thead>  
            <tbody>
            <?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo $filas['id']; ?></td>
                    <td><?php echo $filas['nombre']; ?></td>
                    <td><?php echo $filas['descripcion']; ?></td>
                    <td><?php echo $filas['precio']; ?></td>
                    <td><?php echo $filas['almacen']; ?></td>
                    <td><?php echo $filas['imagen']; ?></td>
                    <td>
                        <a href="editar_producto.php?id=<?php echo $filas['id'];?>">Editar</a>
                        <a href="eliminar_producto.php?id=<?php echo $filas['id'];?>">Eliminar</a>
                    </td>
                </tr>
             <?php } ?>   
            </tbody>
        </table>
    </div>    
</body>
</html>