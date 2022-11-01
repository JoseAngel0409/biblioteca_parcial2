<?php

    include 'conexion.php';

    $titulo = $_POST["titulo"];
    $editorial = $_POST["editorial"];
    $num_paginas = $_POST["num_paginas"];
    $autor = $_POST["autor"];

    $sql = "INSERT INTO usuarios (titulo, editorial, num_paginas, autor) ". 
    "VALUES ('".$titulo."', '".$editorial."', '".$num_paginas."', '".$autor."' )";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos_libro.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos_libro.php'>Regresar</a>";
    }

    $conexion->close();
?>