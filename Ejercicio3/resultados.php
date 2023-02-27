<?php

$genero = $_POST['genero'];
$edad = $_POST['edad'];

function jubilacion($edad){
    if($edad === 0) {throw new Exception("Edad incorrecta", 1);
    }
}

jubilacion($edad);

function confirmar($genero, $edad){
    if(is_null($edad)){
        throw new Exception("Error de calculo", 2);
    }else{
        if($genero == "masculino" && $edad >= 62 ) $etiqueta = "Cumple las condiciones para la jubilación";
        elseif($genero =="femenino" && $edad >= 57 ) $etiqueta = "Cumple las condiciones para la jubilación";
        else $etiqueta = "No cumple con los requisitos para la jubilación";
        
        return $etiqueta;
    }
}

try {
    $jubilacion = jubilacion($genero, $edad);
    $etiqueta = confirmar($genero, $edad);
} catch(Exception $ex) {
    $codigo = $ex->getCode();
    $mensaje = $ex->getMessage();
    echo "Error IMC: ".$codigo." - ".$mensaje;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <br><br>
        <label><?php echo $etiqueta; ?></label>
        <br><br>
        <input type="submit" value="Verificar nuevamente">
    </form>
</body>
</html>