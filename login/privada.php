<?php
    if($_GET['dejameEntrar'] == 0){
        header('Location: login.php');
        exit();
    }elseif($_GET['dejameEntrar'] == 1){
        echo "Bienvenido a la pagina web!";
    }
?>