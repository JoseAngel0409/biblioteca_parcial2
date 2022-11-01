<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];


    $sql = "INSERT INTO usuarios (nombre, edad, sexo, domicilio, fecha_nacimiento)". 
    "VALUES ('".$nombre."', '".$telefono."', '".$direccion."', )";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>