<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Domicilio</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <form>
            <label for="">id usuario</label>
            <input type="text" name="idU">
            <label for="">codigo Postal</label>
            <input type="number" name="cp" minlength="4" maxlength="5">
            <label for="">Estado</label>
            <input type="text" name="estado">
            <label for="">Ciudad</label>
            <input type="text" name="ciudad">
            <label for="">Fraccionamiento</label>
            <input type="text" name="fracc"><br>
            <label for="">Calle</label>
            <input type="text" name="calle">
            <label for="">Numero ext.</label>
            <input type="text" name="numext" maxlength="10">
            <label for="">Numero int.</label>
            <input type="text" name="numint" maxlength="10">
            <label for="">Telefono</label>
            <input type="text" name="tel" minlength="10" maxlength="13">
            <input type="submit" name="btn" value="Agregar">
            <a href="domicilio.php">Regresar</a>
        </form>
    </div>
    <?php 
        include 'conexion.php';
        if(isset($_GET['btn'])){
            $idU = $_GET['idU'];
            $cp = $_GET['cp'];
            $estado = $_GET['estado'];
            $ciudad = $_GET['ciudad'];
            $fracc = $_GET['fracc'];
            $calle = $_GET['calle'];
            $numext = $_GET['numext'];
            $numint = $_GET['numint'];
            $tel = $_GET['tel'];
            if(empty($idU) || empty($cp) || empty($estado) || empty($ciudad)
               ||empty($fracc) || empty($calle) || empty($numext) || empty($tel)){
                   echo "<br><br>**Datos no validos**";
               }
            else{
                $sql= "INSERT INTO domicilio VALUES (NULL,'$idU','$cp','$estado'
                ,'$ciudad','$fracc','$calle','$numext','$numint','$tel')";	
                $ejecutar = mysqli_query($con,$sql);
                if($ejecutar){
                    header('Location:domicilio.php');
                }
            }
        }
    ?>
    
</body>
</html>