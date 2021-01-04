<?php
include 'conexion.php';
$enviar = false;
if(isset($_GET['btn'])){
 	$enviar = true;

	if(empty($nombre)){
		echo "<p class='error'>* El campo Nombre es obligatorio </p>";
		$enviar = false;
	}
	if(empty($apellido)){
		echo "<p class='error'>* El campo Apellido es obligatorio </p>";
		$enviar = false;
	}
	if(empty($correo)){
		echo "<p class='error'>* El campo Correo es obligatorio </p>";
		$enviar = false;
	}
	elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
		echo "<p class='error'>* El correo electronico no es valido </p>";	
		$enviar = false;
	}
	else{
		$consulta = "SELECT * FROM cliente WHERE correo = '$correo'";	
		$ejecutar = mysqli_query($con,$consulta);
		$filas = mysqli_num_rows($ejecutar);

		if($filas > 0){
			echo "<p>* El usuario ya ha sido registrado </p>";
			$enviar = false;
		}
		//mysqli_free_result($ejecutar);
	}
	if(empty($password)){
		echo "<p class='error'>* Debes crear una contraseña </p>";
		$enviar = false;
	}
	elseif(strlen($password) < 8){
		echo "<p class='error'>* La contraseña debe tener al menos 8   caracteres </p>";
		$enviar = false;
	}
	elseif(strlen($password) >20){
		echo "<p class='error'>* La contraseña no debe tener mas de 20 caracteres </p>";
		$enviar = false;
	}
  }	
  //mysql_close();
?>