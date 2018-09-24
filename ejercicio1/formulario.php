<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Formulario</title>
    <style>
    div {
        margin: 0.5em;
    }
    </style>
</head>
<body>
<h1>Consulta de Empleados</h1>
<form action="datos.php" method="post" accept-charset="utf-8">
    <div>
    <label for="empleado">Nombre del Empleado: </label>
    <input type="text" name="empleado" placeholder="Ingrese Nombre"/>
    </div>
   
    <div>
    <label for="sueldo">Sueldo S/.</label>
    <input type="text" name="sueldo" placeholder="Ingrese sueldo"/>
    </div>
    
    <input type="submit" value="Enviar Datos"/>
</form>
    
</body>
</html>