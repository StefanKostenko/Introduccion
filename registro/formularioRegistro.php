<?php
$errores = [];
if (sizeof($_POST) != 0){
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

    //Datos POST

    $nombre = $_POST['nombre'] ?? "";
    $email = $_POST['correo'] ?? "";
    $confirmedPassword = $_POST['confirmedPassword'] ?? "";
    $password = $_POST['password'] ?? "";
    
    if(strlen($nombre) == 0){
        $errores[] = "Por favor rellene el nombre";
    }
    if(strlen($email) == 0)
        $errores[] = "Por favor rellene el email";
    
    if($password != $confirmedPassword){
        $errores[] = "La contraseña no coincide!";
    }
    if (sizeof($errores) == 0){
        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES ( ?, ?, ?)');

        $pdoSt->bindParam(1, $nombre);
        $pdoSt->bindParam(2, $email);
        $pdoSt->bindParam(3, $password);

        $pdoSt->execute();
    }

    /*$usuario = $pdo->query("SELECT username, email FROM users");

    while ($registro = $usuario->fetch()){

    echo $registro['username']."<br>";

    echo $registro['email']."<br />";

    }*/
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
    <?php
        if (sizeof($errores) > 0 ){
            foreach ($errores as $error){
                echo $error . "<br>";
            }
        }
    ?>
    <form method="POST">
        <label>Nombre usuari@: </label><br>
        <input type="text" id="nombre" name="nombre" value=""/></input><br>
        <label>Correo: </label><br>
        <input type="text" id="correo" name="correo" value=""/></input><br>
        <label>Contraseña: </label><br>
        <input type="text" id="password" name="password" value=""/></input><br>
        <label>Confirmar la contraseña: </label><br>
        <input type="text" id="confirmedPassword" name="confirmedPassword" value=""/></input><br><br>
        <input type="submit" name="submit" value="Registrarse"/><br><br>
    </form>
    ¿Ya eres miembro? <a href="./login.php">Acceso usuari@s</a>
</body>
</html>