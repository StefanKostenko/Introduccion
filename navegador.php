
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$navegador = $_SERVER['HTTP_USER_AGENT'];

if(strpos($navegador, "Mozilla") === false){
   echo "El navegaddor no es Firefox! Por favor cambie de navegador a Firefox."; 
}
?>

    <p>Pagina Web</p>
</body>
</html>