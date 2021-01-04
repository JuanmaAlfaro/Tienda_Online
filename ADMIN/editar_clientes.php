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
        $sql = "SELECT * FROM cliente WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idC" value ="<?php echo $fila['id'] ?>">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value ="<?php echo $fila['nombre'] ?>" required>
            <label for="">Apellido</label>
            <input type="text" name="apellido" value ="<?php echo $fila['apellido'] ?>" required>
            <label for="">Correo</label>
            <input type="email" name="correo" value ="<?php echo $fila['correo'] ?>" disabled>
            <label for="">Contraseña</label>
            <input type="password" name="password" value ="<?php echo $fila['password'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="clientes.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idC'];
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            //$correo = $_GET['correo'];
            $password = $_GET['password'];
            $sql2= "UPDATE cliente SET nombre = '$nombre' , 
            apellido = '$apellido', password  = '$password' 
            WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:clientes.php');
            }
        }
    ?>
</body>
</html>