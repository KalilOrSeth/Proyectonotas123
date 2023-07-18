<!DOCTYPE html>
<html>
<head>
    <title>Ingreso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <style>
      
    </style>
</head>
<body>

    <center>

    <button style="top: -300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        HAS CLIK PARA INICIAR SECCION 
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Inicio de sesión</h5>
                    <button id="BOTON1" type="button"   class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="./Usuarios/controladores/usuariocontrol.php" method="POST">
                        <div class="form-group">
                            <label for="documento">Usuario:</label>
                            <input type="txt" name="txtNombre" class="form-control" id="documento" placeholder="Documento">
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" name="txtcontrasena" class="form-control" id="contraseña" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        <br></form>
                        <p>!No tienes cuenta¡<a href="../ProyectoNotasDSD/Administrador/pages/agregar.php">HAS click aqui</a></p>

                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </center>
</body>