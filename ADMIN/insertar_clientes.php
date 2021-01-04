<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <form>
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="">Correo</label>
            <input type="email" name="correo" id="correo" required>
            <label for="">Contraseña</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" name="btn" value="Agregar" id="btn">
            <a href="clientes.php">Regresar</a>
        </form>
    </div>
    <?php
        if(isset($_GET['btn'])){
            $correo = $_GET['correo'];
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $password = $_GET['password'];
            $enviar;
            include 'conexion.php';
            include 'validar_cliente.php';
            if($enviar){
                $sql= "INSERT INTO cliente VALUES (NULL,'$nombre','$apellido','$correo','$password',CURRENT_TIMESTAMP)";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:clientes.php');
                }
                else{
                    echo "ha ocurrido un error";
                }    
            }
    }  
    ?>
</body>
</html>