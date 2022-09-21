<?php
$nombres = array('Stefan' , 'Antonio', 'Borja');
echo count($nombres) . "<br>";

echo implode(" " , $nombres) . "<br>";

$ordenAlfabetico = $nombres;
asort($ordenAlfabetico);

echo implode(" " , $ordenAlfabetico) . "<br>";

$ordenInverso = array_reverse($nombres);

echo implode(" " , $ordenInverso) . "<br>";

$posicionDeMiNombre = array_search('Stefan', $nombres) + 1;
echo $posicionDeMiNombre . "<br>";

$alumnos = [
    ["id" => 1, "nombre" => "Fernando", "edad" => 21],
    ["id" => 2, "nombre" => "David", "edad" => 18],
    ["id" => 3, "nombre" => "Sara", "edad" => 17],
    ["id" => 4, "nombre" => "Laura", "edad" => 19],
];

echo '<table border="1">';
foreach($alumnos as $alumno){
    echo "<tr>";
    foreach($alumno as $clave => $valor){
        echo "<td>" . $valor . "</td>";
    }
    echo "</tr>";
};
echo '</table>';

$nombresAlumnos = array_column($alumnos, 'nombre');
print_r($nombresAlumnos);

$numeros = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
echo "<br>" . array_sum($numeros);
?>