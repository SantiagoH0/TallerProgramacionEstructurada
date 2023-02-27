<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Pago de nómina</h2>
   <form action="resultados.php" method="POST">
    <label>Nombres y Apellidos</label>
    <input type="text" id="nombre" name="nombre" size="15" placeholder="Digite su nombre" required><br>
    <label>Cantidad de días trabajados</label>
    <input type="text" id="dias" name="dias" size="15" placeholder="Digite la cantidad de días trbajados" required ><br>
    <label>Cantidad de horas extras</label>
    <input type="text" id="extras" name="extras" size="15" placeholder="Digite la cantidad de horas extras" required ><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>