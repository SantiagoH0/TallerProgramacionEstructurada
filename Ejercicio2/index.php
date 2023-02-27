<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="resultados.php" method="POST">
        <label>Peso en Kg</label>
        <input type="number" id="peso" name="peso" min="1" step="any" placeholder="Digite su peso" required><br><br>
        <label>Estatura en M</label>
        <input type="number" id="estatura" name="estatura" min="1" step="any" placeholder="Digite su peso" required><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>