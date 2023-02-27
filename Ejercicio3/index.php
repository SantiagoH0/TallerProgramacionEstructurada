<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Derecho de Jubilacion</h1>
    <form action="resultados.php" method="POST">
        <label>Selecciona el genero:</label>
        <br>
        <select name="genero">
            <option value="masculino">Hombre</option>
            <option value="femenino">Mujer</option>
        </select>
        <br><br>
        <label>Edad:</label>
        <br>
        <input type="number" id="edad" name="edad" size="15" min="18" step="any" placeholder="Digite su edad" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
