<?php
    session_start();
?>

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
if (isset($_SESSION['palabras'])){
    $palabras=$_SESSION['palabras'];
    if (isset($_GET['palabra'])){
        $aciertos=0;
        $resultados1=$_GET['palabra'];
        foreach ($palabras as $i=>$palabra){
            if (array_search($palabra,$resultados1)!==false){
                $aciertos++;
                echo "<p>acertaste $palabra</p>";
            }else{
                echo "<p>fallaste $palabra</p>";
            }
        }
        echo "<h2>numero de aciertos:$aciertos</h2>";
        if ($aciertos==5){
            echo "<h2>acertaste todos</h2>";
        }
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}
?>

</body>
</html>