<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM carrito WHERE id = '$id' ";
    $ejecutar = mysqli_query($con,$sql);
    if($ejecutar){
        header('Location:carrito.php');
    }
?>