 	<!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
   </head>
   <style>
    .form button{
      margin-left:20px;
      width:150px;
      height:40px;
      background: #e9e9e9;
      border-radius:5px;
      font-size:20px;
      color:#A10235;
      align-text:center;
      cursor: pointer;
    }
    .form button:hover{
      background: #A10235;
      color: #fff;
    }
   </style>
   <body>
    <div class="form">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" 
      method="POST">
        <button name="cliente">Clientes</button>
        <button name="producto">Productos</button>
        <button name="pedido">Pedidos</button>
        <button name="carrito">Carrito</button>
        <button name="domicilio">Domicilio</button>
        <button name="pedidoD">Pedido_Detalle</button><br><br><br><br>
        <button name="salir">Salir</button>
      </form>
    </div>  

      <?php
      
        if(isset($_POST['carrito'])){
          header('Location:carrito.php');    
        }
      
        if(isset($_POST['cliente'])){
          header('Location:clientes.php');

        }
        if(isset($_POST['pedido'])){
          header('Location:pedido.php');
        }
        if(isset($_POST['pedidoD'])){
          header('Location:detalle.php');
        }
        if(isset($_POST['producto'])){
          header('Location:producto.php');
        }
        if(isset($_POST['domicilio'])){
          header('Location:domicilio.php');
        }
        if(isset($_POST['salir'])){
          header('Location:ingresar.php');
        }
    ?>
   </body>
   </html>