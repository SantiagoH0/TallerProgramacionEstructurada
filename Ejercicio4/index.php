<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular Promedio</h1>
    <form action="resultados.php" method="POST">
        <label>Ingrese su nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="notas">Ingrese las notas separados por comas:</label>
        <input type="text" name="notas" id="notas">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>