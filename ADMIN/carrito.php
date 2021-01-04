<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carritos</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'conexion.php';
        $sql = "SELECT * FROM carrito ";
        $resultado = mysqli_query($con,$sql);
    ?>
    <div>
        <a href= "admin.php">Regresar</a>&nbsp;&nbsp;&nbsp;
        <a href= "insertar_carrito.php">Nuevo Registro</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>id_usuario</th>
                    <th>id_producto</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                </tr>
            </thead>  
            <tbody>
            <?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo $filas['id']; ?></td>
                    <td><?php echo $filas['id_usuario']; ?></td>
                    <td><?php echo $filas['id_producto']; ?></td>
                    <td><?php echo $filas['cantidad']; ?></td>
                    <td>
                        <a href="editar_carrito.php?id=<?php echo $filas['id'];?>">Editar</a>
                        <a href="eliminar_carrito.php?id=<?php echo $filas['id'];?>">Eliminar</a>
                    </td>
                </tr>
             <?php } ?>   
            </tbody>
        </table>
    </div>
</body>
</html>