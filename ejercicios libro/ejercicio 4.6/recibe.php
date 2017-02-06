<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    function cesar ($texto,$clave){
        //recorrer el texto, letra a letra
        $res="";
        for ($i = 0; $i < strlen($texto); $i++) {
            $res=$res.chr((ord($texto)+$clave));
        }
        return $res;
    }
    ?>
</head>
<body>
<?php
if (isset($_GET['texto']) && isset($_GET['clave'])){
    if (isset($_GET['tipo'])){
        if ($_GET['tipo']=="desencriptar")
            echo cesar($_GET['texto'],$_GET['clave']);
        else
            echo cesar($_GET['texto'],$_GET['clave']);
    }
}

?>

</body>
</html>