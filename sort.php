<?php

echo "Nombre ascendente: <br>";

$personas = array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

$perosnasNombreAsc = $personas;

ksort($perosnasNombreAsc);

foreach($perosnasNombreAsc as $nombre => $edad){
    echo "$nombre = $edad\n" . "<br>";
}

echo "<br> Edad ascendente: <br>";

$personasEdadAsc = $personas;

asort($personasEdadAsc);

foreach($personasEdadAsc as $nombre => $edad){
    echo "$nombre = $edad\n" . "<br>";
}

echo "<br> Nombre descendete: <br>";

$perosnasNombreDes = $personas;

krsort($perosnasNombreDes);

foreach($perosnasNombreDes as $nombre => $edad){
    echo "$nombre = $edad\n" . "<br>";
}

echo "<br> Edad descendente: <br>";

$personasEdadDes = $personas;

arsort($personasEdadDes);

foreach($personasEdadDes as $nombre => $edad){
    echo "$nombre = $edad\n" . "<br>";
}
?>