<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id = '$id' ";
    $ejecutar = mysqli_query($con,$sql);
    if($ejecutar){
        header('Location:clientes.php');
    }
?>