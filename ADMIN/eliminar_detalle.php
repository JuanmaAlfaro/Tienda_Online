<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pedido_detalle WHERE id = '$id' ";
    $ejecutar = mysqli_query($con,$sql);
    if($ejecutar){
        header('Location:detalle.php');
    }
?>