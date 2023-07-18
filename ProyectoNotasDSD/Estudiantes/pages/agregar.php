<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center>
<div class="container">
  <h2>Registro estudiantes</h2>
  <form action="../../Estudiantes/controladores/controladoresestudiantes.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Nombre:</label>
      <input type="text" class="form-control" id="uname" placeholder="Ingresar nombre" name="txtnombre" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese el nombre.</div>
    </div>
    <div class="form-group">
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido" name="txtapellido" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese el apellido.</div>
    </div>
    <div class="form-group">
      <label for="documento">Documento:</label>
      <input type="text" class="form-control" id="documento" placeholder="Ingresar documento" name="txtdocumento" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese el documento.</div>
    </div>
    <div class="form-group">
      <label for="correo">Correo:</label>
      <input type="email" class="form-control" id="correo" placeholder="Ingresar correo" name="txtcorreo" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese un correo válido.</div>
    </div>
    <div class="form-group">
      <label for="materias">Materias:</label>
      <input type="text" class="form-control" id="materias" placeholder="Ingresar materias" name="txtmaterias" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese las materias.</div>
    </div>
    <div class="form-group">
      <label for="docentes">Docentes:</label>
      <input type="text" class="form-control" id="docentes" placeholder="Ingresar docentes" name="txtaDocentes" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese los docentes.</div>
    </div>
    <div class="form-group">
      <label for="promedio">Promedio:</label>
      <input type="text" class="form-control" id="promedio" placeholder="Ingresar promedio" name="txtpromedio" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese el promedio.</div>
    </div>
    <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="txtfecha" required>
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Por favor ingrese la fecha.</div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>
</center>
</body>
</html>


