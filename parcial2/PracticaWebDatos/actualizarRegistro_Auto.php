<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de autos y Tarjetas de circulacion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM automovil WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Automovil</h1><hr>
                <form method="post" action="guardarDatos_Auto.php">
                <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Marca:</label>
                        <input value="<?php echo $registro["marca"]; ?>" type="text" class="form-control" name="marca" placeholder="Teclea la Marca">
                    </div>

                    <div class="form-group">
                        <label for="">Modelo:</label>
                        <input value="<?php echo $registro["modelo"]; ?>" type="text" class="form-control" name="modelo" placeholder="Teclea el modelo">
                    </div>

                    <div class="form-group">
                        <label for="">Placas:</label>
                        <input value="<?php echo $registro["placas"]; ?>" type="text" class="form-control" name="placas" placeholder="Teclea las Placas">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Color:</label>
                        <input value="<?php echo $registro["color"]; ?>" type="text" class="form-control" name="color" placeholder="Teclea el color">
                    </div>

                    <div class="form-group">
                        <label for="">Numero de tarjeta de circulacion:</label>
                        <input value="<?php echo $registro["tarjeta"]; ?>" type="text" class="form-control" name="tarjeta" placeholder="Teclea el numero de tarjeta">
                    </div>

                    <div class="form-group">
                        <label for="">Propietario:</label>
                        <input value="<?php echo $registro["propietario"]; ?>" type="text" class="form-control" name="propietario" placeholder="Teclea tu nombre">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos_Auto.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
