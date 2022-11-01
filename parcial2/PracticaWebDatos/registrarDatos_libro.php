<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar libro</h1><hr>
                <form method="post" action="guardarDatos_libro.php">
                    <div class="form-group">
                        <label for="">Titulo:</label>
                        <input type="text" class="form-control" name="Titulo" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Autor:</label>
                        <textarea name="autor" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    

                    <div class="form-group">
                        <label for="">Editorial:</label>
                        <textarea name="editorial" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Numero de paginas:</label>
                        <textarea name="num-paginas" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
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
