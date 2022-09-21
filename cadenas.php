<?php
$nombre = trim($_GET['nombre'], '/') ?? 'Stefan';
echo $nombre;
?>
<br>
<?php
echo strlen($nombre);
?>
<br>
<?php
echo strtoupper($nombre);
?>
<br>
<?php
echo strtolower($nombre);
?>
<br>
<?php
$prefijo = $_GET['prefijo'] ?? ' ';
$pos = strpos($nombre, $prefijo);
if ($pos !== false) {
    echo 'Si que coincide!';
};
?>
<br>
<?php
echo substr_count(strtoupper($nombre) . strtolower($nombre) , 'a');
?>
<br>
<?php
$pos = stripos($nombre, 'a');
if($pos !== false){
    echo "Se encontró 'a' en '$nombre' en la posición $pos";
};
?>
<br>
<?php
    echo str_ireplace('o', 0 , $nombre);
?>
<br>
<?php
$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

echo $url . "<br>";
echo parse_url($url, PHP_URL_SCHEME) . "<br>";
echo parse_url($url, PHP_URL_PASS) . "<br>";
echo parse_url($url, PHP_URL_HOST) . "<br>";
echo parse_url($url, PHP_URL_PORT) . "<br>";
echo parse_url($url, PHP_URL_PATH) . "<br>";
echo parse_url($url, PHP_URL_QUERY) . "<br>";
echo parse_url($url, PHP_URL_FRAGMENT);
?>