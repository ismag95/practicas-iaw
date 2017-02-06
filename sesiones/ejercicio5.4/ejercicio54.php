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
<form action="#">
    <label for="tarea"> Añadir tarea</label>
    <input type="text" id="tarea" name="tarea">
    <button>Añadir</button>
</form>


<?php

$lista=array();
if (isset($_COOKIE['lista'])){
    $lista=unserialize($_COOKIE['lista']);
    //empezamos a programar como borrar las cosas
    if (isset($_GET['borrar'])){
        $n=$_GET['borrar'];
        unset($lista[$n]);
    }
}
if (isset($_GET['tarea']) && strlen(trim($_GET['tarea']))){
    $tarea=trim($_GET['tarea']);
    array_push($lista,$tarea);
}
if (count($lista)>0){
    echo "<h1>Lista de tareas</h1>";
    echo "<ol>";
    foreach ($lista as $i=>$t){
        echo "<li>$t <a href='ejercicio54.php?borrar=$i'>borrar</a></li> ";
    }
    echo "</ol>";
}
setcookie("lista",serialize($lista),time()+60*60*24*7);
?>
</body>
</html>