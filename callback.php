<?php
$cadenas = array("Hola que tal", "Adios", "Buenos dias", "Buenas noches");

$long = array_map("strlen", $cadenas);

print_r($long);

echo "<br>" . max($long) . " "  . min($long);
?>