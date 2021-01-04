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
        $sql = "SELECT * FROM domicilio WHERE id = '$id'";
        $resultado = mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){

        ?>
    <div>
        <form>
            <input type="hidden" name="idD" value ="<?php echo $fila['id'] ?>">
            <label for="">id usuario</label>
            <input type="text" name="idU" value ="<?php echo $fila['id_usuario'] ?>" required>
            <label for="">codigo Postal</label>
            <input type="number" name="cp" minlength="4" maxlength="5" value ="<?php echo $fila['codigo_postal'] ?>" required>
            <label for="">Estado</label>
            <input type="text" name="estado" value ="<?php echo $fila['Estado'] ?>" required>
            <label for="">Ciudad</label>
            <input type="text" name="ciudad" value ="<?php echo $fila['Ciudad'] ?>" required>
            <label for="">Fraccionamiento</label>
            <input type="text" name="fracc" value ="<?php echo $fila['Fraccionamiento'] ?>" required><br>
            <label for="">Calle</label>
            <input type="text" name="calle" value ="<?php echo $fila['Calle'] ?>" required>
            <label for="">Numero ext.</label>
            <input type="text" name="numext" maxlength="10" value ="<?php echo $fila['num_ext'] ?>" required>
            <label for="">Numero int.</label>
            <input type="text" name="numint" maxlength="10" value ="<?php echo $fila['num_int'] ?>">
            <label for="">Telefono</label>
            <input type="text" name="tel" minlength="10" maxlength="13" value ="<?php echo $fila['telefono'] ?>" required>
            <input type="submit" name="btn" value="Actualizar">
            <a href="domicilio.php">Regresar</a>
        </form>
      <?php } ?>  
    </div>
    <?php 
        if(isset($_GET['btn'])){
            $id = $_GET['idD'];
            $idU = $_GET['idU'];
            $cp = $_GET['cp'];
            $estado = $_GET['estado'];
            $ciudad = $_GET['ciudad'];
            $fracc = $_GET['fracc'];
            $calle = $_GET['calle'];
            $numext = $_GET['numext'];
            $numint = $_GET['numint'];
            $tel = $_GET['tel'];

            $sql2= "UPDATE domicilio SET id_usuario = '$idU' , 
            codigo_postal = '$cp', Estado = '$estado', Ciudad  = '$ciudad', 
            Fraccionamiento = '$fracc', Calle = '$calle', num_ext = '$numext',
            num_int = '$numint', telefono = '$tel' WHERE id = '$id' ";	
            $ejecutar = mysqli_query($con,$sql2);
            if($ejecutar){
                header('Location:domicilio.php');
            }
        }
    ?>
</body>
</html>