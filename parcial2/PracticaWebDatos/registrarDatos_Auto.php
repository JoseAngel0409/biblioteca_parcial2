<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoraSonica</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Automovil</h1><hr>
                <form method="post" action="guardarDatos_Auto.php">
                    <div class="form-group">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marca" placeholder="Teclea la Marca">
                    </div>

                    <div class="form-group">
                        <label for="">Modelo:</label>
                        <input type="text" class="form-control" name="modelo" placeholder="Teclea el modelo">
                    </div>

                    <div class="form-group">
                        <label for="">Placas:</label>
                        <input type="text" class="form-control" name="placas" placeholder="Teclea las Placas">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Color:</label>
                        <input type="text" class="form-control" name="color" placeholder="Teclea el color">
                    </div>

                    <div class="form-group">
                        <label for="">Numero de tarjeta:</label>
                        <input type="text" class="form-control" name="tarjeta" placeholder="Teclea el numero de tarjeta">
                    </div>

                    <div class="form-group">
                        <label for="">Propietario:</label>
                        <input type="text" class="form-control" name="propietario" placeholder="Teclea tu nombre">
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
