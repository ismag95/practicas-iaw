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
<h1>Encriptado y desencriptado de tipo César</h1>
<form action="recibe.php">
    <label for="texto">escriba el texto a encriptar o desencriptar</label><br>
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
    <fieldset>
        <legend>elija lo que desea</legend>
        <input id="encriptar" name="tipo" type="radio" value="encriptar" checked>
        <label for="encriptar">encriptar</label>
        <input id="desencriptar" name="tipo" type="radio" value="desencriptar">
        <label for="desencriptar">desencriptar</label>
    </fieldset>
    <label for="clave">escriba la clave</label>
    <input id="clave" name="clave" type="number">
    <button>enviar</button>
</form>
</body>
</html>