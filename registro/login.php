<?php
$errores = [];
if (sizeof($_POST) != 0){
    // Conectar base de datos
    $opciones = array(

        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    
        PDO::ATTR_PERSISTENT => true
    
    );
    
    $pdo = new PDO(
    
        'mysql:host=localhost;dbname=users;charset=utf8',
    
        'root',
    
        'sa',
    
    $opciones);

    //Datos
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    //Comprovacion de errores
    if(strlen($nombre) == 0){
        $errores[] = "Introduzca un usuario!";
    }

    if(strlen($password) == 0){
        $errores[] = "Introduzca la contraseña";
    }

    // Si no hay errores que ejecute la consulta
    if(sizeof($errores) == 0){
        $usuario = $pdo->query("SELECT username, email FROM users WHERE username = '$nombre' and password = '$password'");
        
        $usuario->execute();
    }

    // Comprovacion rapida si ha entrado o no.
    if ($registro = $usuario->fetch()){
            echo "Entrado";
    }else{
        $errores[] = "El usuario o contraseña no coinciden!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label>Nombre usuari@: </label><br>
        <input type="text" id="nombre" name="nombre" value=""/></input><br>
        <label>Contraseña: </label><br>
        <input type="text" id="password" name="password" value=""/></input><br><br>
        <input type="submit" name="submit" value="Entrar"/><br><br>
    </form>

    <?php
        if (sizeof($errores) > 0 ){
            foreach ($errores as $error){
                echo $error . "<br>";
            }
        }
    ?>

</body>
</html>
