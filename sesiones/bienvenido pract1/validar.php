<?php
session_start();
if (isset($_POST['nombre']) && isset($_POST['pass'])){
    if ($_POST['nombre']!="ismael" && $_POST['pass']!="1234"){
        header("location:login.php");
    }else{
        $_SESSION['nombre']="ismael";
        header("location:bienvenido.php");
    }
}else{
    header("location:login.php");
}
?>