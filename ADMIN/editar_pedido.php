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
        $sql = "SELECT * FROM pedido WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idP" value ="<?php echo $fila['id'] ?>">
            <label for="">id usuario</label>
            <input type="number" name="idU" value ="<?php echo $fila['id_usuario'] ?>" required>
            <label for="">Metodo Pago</label>
            <input type="text" name="metpago" value ="<?php echo $fila['metodo_pago'] ?>" required>
            <label for="">Total</label>
            <input type="number" name="total" value ="<?php echo $fila['total'] ?>" required>
            <label for="">id domicilio</label>
            <input type="number" name="idD" value ="<?php echo $fila['id_domicilio'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="pedido.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idP'];
            $idU = $_GET['idU'];
            $metpago = $_GET['metpago'];
            $total = $_GET['total'];
            $idD = $_GET['idD'];
            $sql2= "UPDATE pedido SET id_usuario = '$idU' , 
            metodo_pago = '$metpago', total = '$total', 
            id_domicilio  = '$idD' WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:pedido.php');
            }
        }
    ?>
</body>
</html>