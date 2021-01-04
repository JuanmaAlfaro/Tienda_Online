<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Pedido</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <form>
            <label for="">id usuario</label>
            <input type="number" name="idU" required>
            <label for="">Metodo Pago</label>
            <input type="text" name="metpago" required>
            <label for="">Total</label>
            <input type="number" name="total" required>
            <label for="">id domicilio</label>
            <input type="number" name="idD" required>
            <input type="submit" name="btn" value="Agregar">
            <a href="pedido.php">Regresar</a>
        </form>
    </div>
    <?php 
        include 'conexion.php';
        if(isset($_GET['btn'])){
            $idU = $_GET['idU'];
            $metpago = $_GET['metpago'];
            $total = $_GET['total'];
            $idD = $_GET['idD'];
            if(empty($idD) || empty($metpago) || empty($total) 
               || empty($idD)){
                   echo "<br><br>**Datos no validos**";
               }
            else{
                $sql= "INSERT INTO pedido VALUES (NULL,'$idU','$metpago','$total','$idD') ";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:pedido.php');
                }
            }
        }
    ?>
    
</body>
</html>