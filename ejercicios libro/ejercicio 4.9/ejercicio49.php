<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        $validmails="/[A-Za-z0-9]@[gmail.com|yahoo.es|yahoo.com|hotmail.com]/";
        function validaemails($cadenas){
            foreach ($cadenas as $email=>$valor){
                if (preg_match($validmails,$email)){
                    echo "$email es valido";
                }
            }
        }
    ?>
</head>
<body>
<?php
    $cadenas= array(
        $email1="is.1995.ga@gmail.com",
        $email2="andres.perez18@yahoo.es",
        $email3="eva@mas.es",
        $email4="pedro@er@es.es",
        $email5="rosa_garcia@hotmail.com",
        $email6="is.1995.ga@ho.es"
    );

?>

</body>
</html>