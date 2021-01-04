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
        $sql = "SELECT * FROM carrito WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idC" value ="<?php echo $fila['id'] ?>" required>
            <label for="">id usuario</label>
            <input type="number" name="idU" value ="<?php echo $fila['id_usuario'] ?>" required>
            <label for="">id producto</label>
            <input type="number" name="idP" value ="<?php echo $fila['id_producto'] ?>" required>
            <label for="">Cantidad</label>
            <input type="number" name="cant" value ="<?php echo $fila['cantidad'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="carrito.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idC'];
            $idU = $_GET['idU'];
            $idP = $_GET['idP'];
            $cant = $_GET['cant'];
            $sql2= "UPDATE carrito SET id_usuario = '$idU' , 
            id_producto = '$idP', cantidad = '$cant'
            WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:carrito.php');
            }
        }
    ?>
</body>
</html>