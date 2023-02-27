<?php

$usuario = $_POST['nombre'];
$cantDias = $_POST['dias'];
$hrExtras = $_POST['extras'];

function nomina ($cantDias, $hrExtras){
    
    if($cantDias === 0) throw new Exception("cantidad igual a cero",1);
    else $valorHrExtra = 15000;
    $valorDia = 50000;

    $subtotal = $cantDias * $valorDia;
    $totalHrExtras = $valorHrExtra * $hrExtras;

    $total = $subtotal + $totalHrExtras;

    return $total;
}

$total = nomina($cantDias, $hrExtras);

function sueldo($total){
    if(is_null($total)){
        throw new Exception("Error calculo del sueldo",2);
    }else {
        $etiqueta =  "$";
        return $etiqueta;
    }
}

try {
    $nomina = nomina($cantDias, $hrExtras);
    $etiqueta = sueldo($total);
}catch (Exception $ex){
    $codigo = $ex->getCode();
    $mensaje = $ex->getMessage();
    echo "Error Nomina: " . $codigo . " - " . $mensaje;
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
    <h2>Sueldo</h2>
    <form action="index.php" method="POST">

        <label><?php echo number_format($total, 2, ',','.') . $etiqueta; ?></label><br><br>
        <input type="submit" value="Calcular nuevamente">
    </form>   
</body>
</html>

