<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DECARTON</title>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">
</head>
<?php 
	 error_reporting(0);
	 session_start();
	 $varsesion = $_SESSION['usuario'];

	 if(!isset($varsesion)){//($varsesion == null || $varsesion = ''){
	 	$cadena = 'Iniciar Sesión';
	 	$pagina = 'sesion.php';
	 }
	 else{
	 	$cadena = $varsesion;
	 	$pagina = 'mi_perfil.php';
	 }

	 //echo $cadena;
	 //echo $pagina;
?>
<body>
	<div class="responsive" columnas-iguales>
	<header>
		<nav>
			<div class="menu">
				<a href="index.php"><img class="logo" src="img/DECARTON3.png" alt="DECARTON"></a>
				<nav>
					<a href="index.php">Inicio </a>
					<a href="quienes_somos.php"> Quienes Somos </a>
					<a href="Catalogo.php"> Catálogo </a>
					<img src="img/userimage.png" class="user-image">
					<?php echo "<a href=".$pagina.">".$cadena."</a>" ?>
				</nav>	
			</div>
		</nav>	
		<h2 class="textos-header">¡COMPARTE TU PASIÓN!</h2>

		<div class="wave" style="height: 200px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-115.40,-44.89 C149.99,150.00 261.00,-84.38 500.00,49.98 L505.36,96.20 L-3.10,90.28 Z" style="stroke: none; fill: #fff;"></path></svg></div>
	</header>
	<main>
			<section class="contenedor sobre-nosotros">
				<h2 class="titulo">Jerseys 2020-2021</h2>
				<div class="contenedor-sobre-nosotros">
					<div id="c-slider">
						<div id="slider">
	 						<section>
								<img src="img/nuestros_productos.jpeg" alt="">
							</section>
							<section>
								<img src="img/uniformes.jpg" alt="">
							</section>
							<section>
								<img src="img/uniformes3.jpeg" alt="">
							</section>
							<section>
								<img src="img/uniformes5.jpg" alt="">
							</section>
						</div>
						<div id="btn-prev">&#60;</div>
						<div id="btn-next">&#62;</div>
					</div>	
				<div class="contenido-textos">
						<br><br><h2 class="titulo">Nuestros Productos</h2>
						<h3><span>1</span> Calzado, Ropa y Accesorios Deportivos </h3>
						<p>Con tan solo unos cuantos clicks encuentra el Calzado deportivo que estas buscando para cualquier deporte, además de todas las prendas que necesitas para entrenar y los mejores accesorios deportivos todo a los mejores precios del mercado, recibelo en la puerta de tu casa.</p>
						<br><h3><span>2</span> Jerseys</h3>
						<p>Encuentra el jersey de tu equipo favorito, tenemos los mejores y nuevos jerseys de los mejroes equipos de Futbol, Basketball, Baseball y Futbol Americano. En DECARTON podras encontrar jerseys de las mejores ligas del mundo(La Liga, Serie A, Premier League, Ligue 1, Bundesliga, Liga MX, MLB, NBA,NFL, entre otras).</p> 
				</div>
			</div>
		</section>
		<section class="Productos">
				<div class="contenedor">
					<h2 class="titulo">Productos Destacados</h2>
					<div class="galeria-productos">

						<div class="imagen-productos">
							<img src="img/mahomes.jpg" alt="Jersey Kansas City Mahomes">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/catalogo_1.png" alt="Jersey Local Barcelona">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/dodgers.jpg" alt="Jersey Dodgers">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/Milan.jpg" alt="Jersey Local Milan">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/mexico.png" alt="Jersey Mexico">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/PSG.jpg" alt="Jersey PSG">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/tenis_Nike.jpg" alt="Zapatilla Deportiva Nike">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/tenis_Puma.jpg" alt="Zapatilla Deportiva Puma">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/tenis_Adidas.jpg" alt="Zapatilla Deportiva Adidas">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
						<div class="imagen-productos">
							<img src="img/santos.webp" alt="Gorra Santos Laguna">
							<div class="hover-galeria">
								<a href=""><img src="img/carrito3.png" alt=""></a>
								<a href=""><p>Ver Producto</p></a>
							</div>
						</div>
					</div>
				</div>
			</section>
				<section class="clientes"> <!--contenedor-->
					<h2 class="titulo">¿Que Dicen Nuestros Clientes?</h2>
					<div class="cards">
						<div class="card">
							<img src="img/face1.jpg" alt="woman">
							<div class="contenido-texto-card">
								<h3>Lana</h3>
								<p>"Estoy bastante satisfecha con el envio, llego en pocos dias y todo en muy buen estado, ¡Estoy feliz con mi jersey del Barcelona!"</p>
							</div>
						</div>
						<div class="card">
							<img src="img/face2.jpg" alt="El Bicho">
							<div class="contenido-texto-card">
								<h3>El Bicho</h3>
								<p>"Encontre los accesorios que necesitaba para poder seguir entrenando como la maquina que soy ¡SIUUUUU!"</p>
							</div>
						</div>
					</div>
			</section>
			<br><br>
			<section class="informacion">
				<div class="contenedor">
					<h2 class="titulo">Más Información</h2>
					<div class="informacion-cont">
						<div class="Redes">
							<a href="https://www.facebook.com/" target="_blank"><img src="img/facebook2.png" alt="Facebook" id="img01">
							<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram2.png" alt="Instagram" id="img02"></a>
							<a href="https://www.youtube.com/" target="_blank"><img src="img/youtube2.png" alt="YouTube" id="img03"></a>
							<h3>Nuestras Redes</h3>
							<p>Visitanos en nuestras redes sociales</p>
						</div>
						<div class="Redes">
							<a href="envios.php"><img src="img/envios.png" alt="Envios y Pagos"></a>
							<h3>Envios y Pagos</h3>
							<p>consulta Informacion acerca de envios y formas de pago</p>
						</div>
						<div class="Redes">
							<a href="contacto.php"><img src="img/escribenos.png" alt="Escríbenos"></a>
							<h3>contactanos</h3>
							<p>¿Tienes preguntas? ¿Sugerencias? ¡Escríbenos!</p>
						</div>
					</div>
				</div>
			</section>
	</main>
	<!-- JavaScript Libre 3-->
	<script>
		var img01 = document.getElementById("img01");//facebook
		var img02 = document.getElementById("img02");//instagram
		var img03 = document.getElementById("img03");//YouTube
		 
		//facebook
		img01.addEventListener("mouseover",function(){
			img01.setAttribute("src", "img/facebook.png");
		});
		img01.addEventListener("mouseout",function(){
			img01.setAttribute("src", "img/facebook2.png");
		});

		//instagram
		img02.addEventListener("mouseover",function(){
			img02.setAttribute("src", "img/instagram.png");
		});
		img02.addEventListener("mouseout",function(){
			img02.setAttribute("src", "img/instagram2.png");
		});

		//YouTube
		img03.addEventListener("mouseover",function(){
			img03.setAttribute("src", "img/youtube.png");
		});
		img03.addEventListener("mouseout",function(){
			img03.setAttribute("src", "img/youtube2.png");
		});
	</script>
		<br><br>
		<?php include 'footer.php'; ?>
	</div>
	<style type="text/css">
		#c-slider{
			margin:auto;
			width:90%;
			max-width:780px;
			position:relative;
			overflow:hidden;
			box-shadow:0 0 0 10px #fff,
					   0 15px 50px;
		}
		#slider{
			display:flex;
			width:400%;
		}
		#slider section{
			width:100%;
		}
		#slider img{
			display:block;
			width:780px;
			height:410px;
			object-fit: cover;
		
		}
		#btn-prev, #btn-next{
			width:40px;
			height:40px;
			background:rgba(255,255,255,0.6);
			color:#000;
			position:absolute;
			top:50%;
			transform: translateY(-50%);
			line-height:40px;
			font-size:30px;
			font-weight:bold;
			text-align:center;
			border-radius:50%;
			cursor:pointer;
		}
		#btn-prev:hover, #btn-next:hover{ 
			background:rgba(255,255,255,1);	
		}

		#btn-prev{
			left:10px;
		}
		#btn-next{
			right:10px;
		}
	</style>	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
	 	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
		crossorigin="anonymous">
	</script>
	<script src="app.js"></script>
</body>
</html>