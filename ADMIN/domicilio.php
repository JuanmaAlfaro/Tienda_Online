<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domicilio</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'conexion.php';
        $sql = "SELECT * FROM domicilio ";
        $resultado = mysqli_query($con,$sql);
    ?>
    <div>
        <a href= "admin.php">Regresar</a>&nbsp;&nbsp;&nbsp;
        <a href= "insertar_domicilio.php">Nuevo Registro</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>id_usuario</th>
                    <th>Codigo Postal</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Fracc</th>
                    <th>Calle</th>
                    <th>numext</th>
                    <th>numint</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </tr>
            </thead>  
            <tbody>
            <?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo $filas['id']; ?></td>
                    <td><?php echo $filas['id_usuario']; ?></td>
                    <td><?php echo $filas['codigo_postal']; ?></td>
                    <td><?php echo $filas['Estado']; ?></td>
                    <td><?php echo $filas['Ciudad']; ?></td>
                    <td><?php echo $filas['Fraccionamiento']; ?></td>
                    <td><?php echo $filas['Calle']; ?></td>
                    <td><?php echo $filas['num_ext']; ?></td>
                    <td><?php echo $filas['num_int']; ?></td>
                    <td><?php echo $filas['telefono']; ?></td>
                    <td>
                        <a href="editar_domicilio.php?id=<?php echo $filas['id'];?>">Editar</a>
                        <a href="eliminar_domicilio.php?id=<?php echo $filas['id'];?>">Eliminar</a>
                    </td>
                </tr>
             <?php } ?>   
            </tbody>
        </table>
    </div>
</body>
</html>