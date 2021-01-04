<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Finalizar Comprar</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	.metodo{
      font-size: 20px;
	}
	.formulario .btn{
		width:600px;
		background-color: #A10235;
	    font-weight: 700;
	    text-decoration:none;
	    font-size: 1.2rem;
	    color: #fff;
	    padding: 1rem 3rem;
	    margin-top: 3rem;	
	    display: inline-block;
	    text-align: center;
	    border: none;
	    display: block;
	    flex: 0 0 100%;
	    cursor: pointer;
	}
	.btn1{
		width:600px;
		background-color: #A10235;
	    font-weight: 700;
	    text-decoration:none;
	    font-size: 1.2rem;
	    color: #fff;
	    padding: 1rem 3rem;
	    margin-top: 3rem;	
	    display: inline-block;
	    text-align: center;
	    border: none;
	    display: block;
	    flex: 0 0 100%;
	    cursor: pointer;	
	}
</style>
<?php 
  session_start();
  error_reporting(0); 
  
?>
<?php include 'conexion.php'; ?>
<?php
  $producto = $_SESSION['infoProducto'];
  $id_usuario = $_SESSION['id'];
  $total = $_SESSION['total'];
?>
<?php
 if(isset($_POST['btnComprar'])){
	    	//include 'validar2.php';
	  		$cp = $_POST['cp'];
	    	$estado = $_POST['estado'];
	    	$ciudad = $_POST['ciudad'];
	    	$fracc = $_POST['fracc'];
	    	$calle = $_POST['calle'];
	    	$numext = $_POST['numext'];
	    	$numint = $_POST['numint'];
	    	$tel = $_POST['tel'];
			$metodoPago = $_SESSION['metodoPago'];
			
	    	$sql = "INSERT INTO domicilio VALUES('','$id_usuario','$cp','$estado','$ciudad','$fracc','$calle','$numext','$numint','$tel')";
	    	$ejecutar = mysqli_query($con,$sql);
     		$consulta = "SELECT id FROM domicilio WHERE id_usuario = '$id_usuario' ORDER BY id DESC";
     		$resultado = mysqli_query($con,$consulta);
     		$row = $resultado -> fetch_assoc();
     		$domicilio = utf8_decode($row['id']);	
     		$sql2 = "INSERT INTO pedido VALUES('','$id_usuario','$metodoPago','$total','$domicilio')";
     		$ejecutar2 = mysqli_query($con,$sql2);
     		$consulta2 = "SELECT id FROM pedido WHERE id_usuario = '$id_usuario' ORDER BY id DESC";
     		$resultado2 = mysqli_query($con,$consulta2);
     		$row2 = $resultado2 -> fetch_assoc();
     		$pedido = utf8_decode($row2['id']);
     		$_SESSION['pedido'] = $pedido;

     		for($i=0;$i< count($producto);$i++) {
     			$productoId = $producto[$i]['idProducto'];
     			$cant = $producto[$i]['cantidad'];
     			$precio = $producto[$i]['precio'];
     			$insertar = "INSERT INTO pedido_detalle VALUES('','$pedido','$productoId','$cant','$precio')";
     			$result = mysqli_query($con,$insertar);
     			$restar = "UPDATE producto set almacen = almacen-$cant
     			           WHERE id = $productoId";
     			$result2 = mysqli_query($con,$restar);           
     		}

     		$borrar = "DELETE FROM carrito WHERE id_usuario = '$id_usuario'";
     		$result3 = mysqli_query($con,$borrar);?>
            <script type="text/javascript">
     		   alert("¡Gracias Por Tu Compra!");
     		   window.location.href = "final.php";
     		</script>
        <?php
	   }
?>
<body>
<?php include 'header.php'; ?>
<div class="metodo">
	<center>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario2" method="POST">
		<h2 class="titulo">Selecciona Metodo De Pago</h2>
		<input type="radio" name="metodo" value="1">Tarjeta de Debito ó Credito &nbsp;&nbsp;
		<input type="radio" name="metodo" value="2">Pay Pal&nbsp;&nbsp;
		<input type="radio" name="metodo" value="3">Deposita en OXXO&nbsp;&nbsp; 
		<input type="submit" name="btn" value="Seleccionar" class="btn1"><br><br>
	</form>

<?php 
$_SESSION['metodoPago'];
if(isset($_POST['btn'])){

		if($_POST['metodo'] == 1){
			$_SESSION['metodoPago'] = 'Tarjeta';
			?>
		<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario3" method="POST">	
	       *Numero de Tarjeta &nbsp;&nbsp; <input type="text" name="numero" required id="numeroT" placeholder="Numero de tarjeta" minlength="16" maxlength="16" class="formulario"><br>
	       *Fecha de Caducidad &nbsp;&nbsp;<input type="text" name="decha" required id="decha" placeholder="MM/AA" minlength="4" maxlength="5" class="formulario"><br>
	       *CVV &nbsp;&nbsp;<input type="text" name="cvv" placeholder="CVV" required id="cvv" minlength="3" maxlength="3" class="formulario"><br><br>
	    </form>
		<script>
		  var validar = function(){
				var num = document.getElementById('numeroT').value;
				if(num.length != 16){
					alert("Datos Incorrectos");
					//return false;
				}
		  };
		  var numero = document.getElementById('numeroT');
		  numero.addEventListener("change",validar);	
		</script>
	       <?php
	       //$numeroTarjeta = $_POST['numero'];
	       //$fechaCad = $_POST['decha'];
	       //$cvv = $_POST['cvv'];
	    }
	    elseif ($_POST['metodo'] == 2){
	    	$_SESSION['metodoPago'] = 'Pay Pal';
	    	?>
	    <form class="formulario"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario4" method="POST">	
		     *Correo Electronico&nbsp;&nbsp;<input type="email" name="correoPP" id="correoPP" placeholder="introduce tu email" class="formulario" required><br>
		     *Contraseña&nbsp;&nbsp;<input type="password" name="passPP" id="passPP" placeholder="Introduce tu contraseña" class="formulario" required><br><br>
	     </form>
	    <?php  	
	      //$correo = $_POST['correo'];
	      //$pasword = $_POST['password'];
	    }
	    else{
	    	$_SESSION['metodoPago'] = 'OXXO';
	    ?>
	    Deposita en OXXO el monto total a pagar a la siguiente Referencia:
	    <br> 4456 7890 3243 7689
	    <br> Monto:&nbsp;$<?php echo $total; ?>	
	    <?php 
	    } 
  }
?>
   
</center>
</div><br><br>	
<div class="formulario">
	<form class="formulario"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST"><!--onsubmit="return validar();"-->
	  <h2>Domicilio</h2><br>
	  *Codigo Postal&nbsp;&nbsp;<input type="text" name="cp" id="cp" minlength="4" maxlength="5" placeholder="Codigo Postal" value="<?php if(isset($cp)){ echo $cp;} ?>"><br>
	  *Estado&nbsp;&nbsp;<input type="text" name="estado" id="estado" placeholder="Estado" value="<?php if(isset($estado)){ echo $estado;} ?>"><br>
	  *Ciudad&nbsp;&nbsp;<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" value="<?php if(isset($ciudad)){ echo $ciudad;} ?>"><br>
	  *Fraccionamiento ó Colonia &nbsp;&nbsp;<input type="text" name="fracc" id="fracc" placeholder="Fraccionamiento" value="<?php if(isset($fracc)){ echo $fracc;} ?>"><br>
	  *Calle&nbsp;&nbsp;<input type="text" name="calle" id="calle" placeholder="calle" value="<?php if(isset($calle)){ echo $calle;} ?>"><br>
	  *Numero Exterior&nbsp;&nbsp;<input type="text" name="numext" id="numext" placeholder="Numero Exterior" value="<?php if(isset($numext)){ echo $numext;} ?>"><br>
	  Numero Interior&nbsp;&nbsp;<input type="text" name="numint" id="numint" placeholder="Numero Interior" value="<?php if(isset($numint)){ echo $numint;} ?>"><br>
	  *Telefono&nbsp;&nbsp;<input type="phone" name="tel" id="tel" maxlength="13" minlength="10" placeholder="Telefono Celular" value="<?php if(isset($tel)){ echo $tel;} ?>"><br>
	  *Campos Obligatorios<br><br>
	  <h2>Total a Pagar:</h2><?php echo '$'.$total; ?>
	  <input type="submit" id="btnComprar" name="btnComprar" value="Finalizar Compra" class="btn">
	</form>
	<script src="validar_compra.js" type="text/javascript"></script>
</div><br><br>	
<br><br>
  <?php 
  $formaPago = $_SESSION['metodoPago'];
  if($formaPago == 'Tarjeta'){?>
	<script>
		var validar2 = function(){
		var num = document.getElementById('numeroT').value;
		var fecha = document.getElementById('decha').value;
		var cvv = document.getElementById('cvv').value;
		if(num.length != 16 || isNaN(num) || fecha.length < 4 || fecha.length >5
		   || cvv.length != 3 || isNaN(cvv)){
			alert("Los Datos de tu Tarjeta son incorrectos o no han sido proporcionados!");
			return false;
			}
		else{
			return validar();
		}	
		};
		var boton = document.getElementById('btnComprar');
		boton.addEventListener("mouseover",validar2);	
		</script>				
  <?php
  }
  elseif($formaPago == 'Pay Pal'){?>
	  <script>
	   var validar2 = function(){
		   var correoPP = document.getElementById('correoPP').value;
		   var passPP = document.getElementById('passPP').value;
		   expresion = /\w+@\w+\.+[a-z]/;

		   if(correoPP === "" || passPP === "" || !expresion.test(correoPP) ){
			   alert("Los datos de tu cuenta Pay Pal son incorrectos o no han sido ingresados!")
		   }
		   else{
			   return validar();
		   }
	   }
	   var boton = document.getElementById('btnComprar');
	   boton.addEventListener("mouseover",validar2);
	  </script>
  <?php   
  }
  else{?>
    <script>
	   var validar2 = function(){
		   return validar();
	   };
	   var boton = document.getElementById('btnComprar');
	   boton.addEventListener("mouseover",validar2);
	</script>
  <?php	
  }
?>
<?php include 'footer.php';?>
</body>
</html>