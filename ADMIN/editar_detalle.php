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
        $sql = "SELECT * FROM pedido_detalle WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idD" value ="<?php echo $fila['id'] ?>">
            <label for="">id orden</label>
            <input type="number" name="idO" value ="<?php echo $fila['id_orden'] ?>" required>
            <label for="">id producto</label>
            <input type="number" name="idP" value ="<?php echo $fila['id_producto'] ?>" required>
            <label for="">Cantidad</label>
            <input type="number" name="cant" value ="<?php echo $fila['cantidad'] ?>" required>
            <label for="">Precio</label>
            <input type="number" name="precio" value ="<?php echo $fila['precio'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="detalle.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idD'];
            $idO = $_GET['idO'];
            $idP = $_GET['idP'];
            $cant = $_GET['cant'];
            $precio = $_GET['precio'];
            $sql2= "UPDATE pedido_detalle SET id_orden = '$idO' , 
            id_producto = '$idP', cantidad = '$cant', 
            precio  = '$precio' WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:detalle.php');
            }
        }
    ?>
</body>
</html>