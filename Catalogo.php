<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Catálogo</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<?php 
     error_reporting(0);
     session_start();
     if(!isset($_SESSION['usuario'])){
        $cad = "";
        $href = 'sesion.php';
     }
     else{
        $cad = "Mi Carrito";
        $href = 'carrito.php';
     }
?>
<body>
  <div class="responsive" columnas-iguales>  
  <?php include 'header.php' ; ?>
	<section class="catalogo-menu">
				<div class="nav">
					<a href="">Hombres </a>
					<a href="">Niños </a>
					<a href="">Mujeres </a>
					<a href="">Accesorios</a>
					<a href="">Calzado</a>
					<a href="">Jerseys</a>
					<input type="text" name="buscar">
					<a href=""><img  src="img/buscar2.png" alt="lupa"></a>		
					<a href="<?php echo $href ?>"> <img  src="img/carro_catalogo2.png" alt="carrito"><?php echo $cad; ?></a>
				</div>	
	</section>
	<h2 class="titulo">Productos</h2>
    <br><section class="contenedor-anuncio">	 				
            <div class="anuncio">
                 <img src="img/catalogo_1.png" alt="">
                        <h3>Jersey Barcelona</h3>
                        <p>Camiseta de visitante de FC Barcelona 2020-2021.</p>
                        <p class="precio">$1,360</p>
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
    				 <input type="submit" class="boton-rojo" name="uno" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['uno'])){
                        $_SESSION['carrito'] = 1;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php 
                      } 
                    ?> 
            </div>					
            <div class="anuncio">
                 <img src="img/catalogo_2.png" alt="">
                        <h3>Balon PUMA</h3>
                        <p>Balon de futbol de la marca PUMA.</p>
                        <p class="precio">$440</p><br>
    				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="dos" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['dos'])){
                        $_SESSION['carrito'] = 2;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
																				
            <div class="anuncio">
                <img src="img/catalogo_3png.png" alt="">
                    <h3>Tennis Dama</h3>
                    <p>Calzado deportivo marca PUMA para dama</p>
                    <p class="precio">$1,650</p>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="tres" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['tres'])){
                        $_SESSION['carrito'] = 3;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
             	
            <div class="anuncio">
                  <img src="img/catalogo_4png.png" alt="">
                        <h3>Playera Dama</h3>
                        <p>Playera deportiva sin mangas para Dama marca NIKE.</p>
                        <p class="precio">$500</p>
    				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario2" method="POST">     
                     <input type="submit" class="boton-rojo" name="cuatro" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['cuatro'])){
                        $_SESSION['carrito'] = 4;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>

            																	
            <div class="anuncio">
                <img src="img/catalogo_5png.png" alt="">
                    <h3>Bolso Deportivo </h3>
                    <p>Bolso deportivo unisex.</p>
                    <p class="precio">$600</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="cinco" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['cinco'])){
                        $_SESSION['carrito'] = 5;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
																
            <div class="anuncio">
                   <img src="img/catalogo_6png.png" alt="">
                        <h3>Tennis Jordan</h3>
                        <p>Calzado para Baketball marca Jordan Hombre</p>
                        <p class="precio">$3,200</p>
    				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="seis" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['seis'])){
                        $_SESSION['carrito'] = 6;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
         																		   
            <div class="anuncio"> 
                <img src="img/dodgers.jpg" alt="">
                    <h3>Jersey Dodgers</h3>
                    <p>Jersey Azul de LA Dodgers unisex.</p>
                    <p class="precio">$2,360</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="siete" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['siete'])){
                        $_SESSION['carrito'] = 7;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
									  											
            <div class="anuncio">
                <img src="img/mexico.png" alt="">
                    <h3>Jersey Seleccion Mexicana</h3>
                    <p>Jersey de visita de la Seleccion Mexicana de Futbol</p>
                    <p class="precio">$1,360</p>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="ocho" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['ocho'])){
                        $_SESSION['carrito'] = 8;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>
										                                     
            <div class="anuncio">
                <img src="img/mahomes.jpg" alt="">
                    <h3>Jersey Kansas City</h3>
                    <p>Jersey Rojo Kansas City Patrick Mahomes.</p>
                    <p class="precio">$2,400</p>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="nueve" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['nueve'])){
                        $_SESSION['carrito'] = 9;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>	

 			<div class="anuncio">
                <img src="img/tenis_Kappa.jpg" alt="">
                    <h3>Zapatilla Depotiva Kappa</h3>
                    <p>Calzado para futbol marca Kappa</p>
                    <p class="precio">$1,200</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="diez" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['diez'])){
                        $_SESSION['carrito'] = 10;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>  
            </div>

            <div class="anuncio">
                <img src="img/Milan.jpg" alt="">
                    <h3>Jersey Milan</h3>
                    <p>Jersey AC Milan Local 2020-2021</p>
                    <p class="precio">$1,600</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="once" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['once'])){
                        $_SESSION['carrito'] = 11;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>																	 
            <div class="anuncio">
                <img src="img/tenis_Puma.jpg" alt="">
                    <h3>Zapatilla Depotiva PUMA</h3>
                    <p>Calzado para futbol marca PUMA</p>
                    <p class="precio">$3,000</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="doce" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['doce'])){
                        $_SESSION['carrito'] = 12;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>																	 
            <div class="anuncio">
                <img src="img/PSG.jpg" alt="">
                    <h3>Jersey PSG</h3>
                    <p>Jersey Alternativo Paris Saint Germain 2019-2020 (20% OFF)</p>
                    <p class="precio">$1,600</p>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="trece" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['trece'])){
                        $_SESSION['carrito'] = 13;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>																	 
            <div class="anuncio">
                <img src="img/santos.webp" alt="">
                    <h3>Gorra Santos</h3>
                    <p>Gorra Verde Club Santos Laguna</p>
                    <p class="precio">$650</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="catorce" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['catorce'])){
                        $_SESSION['carrito'] = 14;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
             </div>									                                   
            <div class="anuncio">
                <img src="img/tenis_Adidas.jpg" alt="">
                    <h3>Zapatilla Deportiva ADIDAS</h3>
                    <p>Calzado para futbol marca ADIDAS</p>
                    <p class="precio">$2,350</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="quince" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['quince'])){
                        $_SESSION['carrito'] = 15;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>																			
            <div class="anuncio">
                <img src="img/tenis_Nike.jpg" alt="">
                    <h3>Zapatilla Deportiva NIKE</h3>
                    <p>Calzado para futbol marca NIKE</p>
                    <p class="precio">$2,750</p><br>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" name="formulario" method="POST">     
                     <input type="submit" class="boton-rojo" name="dzseis" value="Ver Producto">
                   </form> 

                    <?php
                      if(isset($_POST['dzseis'])){
                        $_SESSION['carrito'] = 16;?>
                        <script type="text/javascript">
                            window.location.href = "ver_producto.php";
                        </script><?php
                      } 
                    ?>
            </div>

        <div class="ver-mas">
            <a href="" class="boton-rojo-ultimo">Ver Más</a>
        </div>
    </section>
    <br><br>
    <?php include 'footer.php' ; ?>
    </div>   
</body>
</html>