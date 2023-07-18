
<html lang="en">
<head>
  <title>Agregar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/estilos/style.css" type="Text/css">
</head>
<body style="background-image:  linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)
">
    <h1 style="    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    left: 550px;
    position: relative;
    margin: 5px;
    width: 247px;
    height: 55px;
    border: solid 2px;">Crear Cuenta</h1>
    <br>
    <form  action="../../Administrador/controladores/agregarusuarios.php" method="POST">
      
     <input type="Text" id="nombreusu"name="txtnombre" class="form-control" placeholder="Nombre" style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
     <input type="Text" id="Apellidousu"name="txtapellido"class="form-control" placeholder="Apellido" style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
    
     <input type="Text" id="Usuario"name="txtusuario"class="form-control" placeholder="Nombre de Usuario"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
     <select name="txtperfil" class="form-control"style="eight: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
        <option  value="Docente">Docente</option>
        <option value="Administrador">Administrador</option>
     </select>
     <br>
     <select name="txtestado" class="form-control"style="eight: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
        <option  value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
        
     </select>
     <br>
     <div id="password">
     <input type="password" id="Password"name="txtcontrasena"class="form-control" placeholder="Password"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >
     <br>
     </div>
     <input name="values" type="submit"class="form-control" placeholder="Enviar"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    </form>
    
    
</body>
</html>









