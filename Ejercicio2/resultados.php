<?php

$peso = $_POST['peso'];
$estatura = $_POST['estatura'];

function imc($peso, $estatura){
    if($estatura === 0 or $peso === 0) throw new Exception("Division por cero", 1);
    else $imc = $peso / pow($estatura, 2);
    return $imc;
}

function nivel($imc){
    if(is_null($imc)){ 
        throw new Exception("Error de calculo", 2);
    }else {
        if ( $imc < 18.5 ) $etiqueta = "Bajo de peso";
        elseif ( $imc >= 18.5 && $imc < 24.9 ) $etiqueta = "Normal";
        elseif ( $imc >= 25 && $imc < 29.9) $etiqueta = "Sobrepeso";
        elseif ( $imc >= 30 && $imc < 34.9) $etiqueta = "Obesidad Grado 1";
        elseif ( $imc >= 35 && $imc < 39.9) $etiqueta = "Obesidad Grado 2";
        else $etiqueta = "Obesidad Grado 3";
        return $etiqueta;
    }
    
}

try {
    $imc = imc($peso, $estatura);
    $etiqueta = nivel($imc);
} catch(Exception $ex) {
    $codigo = $ex->getCode();
    $mensaje = $ex->getMessage();
    echo "Error IMC: ".$codigo." - ".$mensaje;
} 

?>

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
    <form action="index.php" method="POST">
    <label>Estado:</label>
    <label><?php echo $etiqueta; ?></label>
    <br>
    <input type="submit" value="Calcular nuevamente">
    </form>
</body>
</html>

