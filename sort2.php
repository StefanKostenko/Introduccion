<?php
$temperaturas = "23.2 25.6 31.0 19.9 27.3 22.2";

$temperaturasMes = explode(" ", $temperaturas);

$temMedia = array_sum($temperaturasMes) / count($temperaturasMes);

$temAsc = $temperaturasMes;
asort($temAsc);

$temDes = $temperaturasMes;
arsort($temDes);

echo("Todas las temperaturas: ");
foreach($temperaturasMes as $temperatura){
    echo "$temperatura ";
}

echo "<br> Temperaturas maximas: ";
print_r(array_slice($temDes, 0, 5));

echo "<br> Temperaturas minimas: ";
for($i=0; $i < 5; $i++){
    echo "$temAsc[$i] ";
}

echo "<br>Temperatura media: $temMedia <br>";
?>