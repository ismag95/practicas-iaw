<?php
    session_start();
?>

<script type="text/javascript">
    window.onload=function () {
        setInterval(function () {location:"http://www.google.es},1);
    }
</script>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    //creamos un array para almacenar las palabras
    $palabras=array("hola","adios","estoy","molon","coche","moto","ordenador","fiesta","wireshark",
                    "sesion","arbitro","electronica","intermitente","señal","instituto","academia",
                    "novia","profesor","portatil");
shuffle($palabras);

$resultados=array();
   for ($i=1;$i<=5;$i++){
       //mostramos las palabras que extraemos del array
       $resultado= $palabras[$i]."<br>";
       echo $resultado;
       //ahora metemos las palabras en un array
       array_push($resultados, $palabras[$i]);

   }
$_SESSION['palabras']=$resultados;

?>
<a href="datos.php">siguiente</a>
</body>
</html>