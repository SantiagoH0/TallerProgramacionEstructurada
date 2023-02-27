<?php

$notas = $_POST['notas'];
$array_notas = explode(",", $notas);


function prom($array_notas){
    if ($array_notas === 0) throw new Exception("division por cero",1);
}


function promedio($array_notas){
    $i = 0;

    foreach($array_notas as $notas){
        $i += $notas;
    }

    $promedio = $i / count($array_notas);

    if(is_null($array_notas)){
        throw new Exception("Error calculo",1);
    }else{
       if($promedio >= 4) $etiqueta = "Aprobaste";
        else $etiqueta = "Desaprobaste";
    }
    return $etiqueta;
}

try {
    $prom = prom($array_notas);
    $etiqueta = promedio($array_notas);
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
        <label>Resultado</label>
        <br>
        <label><?php echo $etiqueta ?></label>
        <br><br>
        <input type="submit" value="Calcular nuevamente">
    </form>
</body>
</html>