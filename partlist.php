<?php
$cadenas = array("Seguro", "que", "apruebo", "esta", "asignatura");
$resultado = [];
for($i=0; $i < count($cadenas) - 1; $i++){
   
        $parte = array_slice($cadenas, 0, $i+1);
        $parte2 = array_slice($cadenas, $i+1);

        $parteFinal = [];
        $parteFinal[] = implode(" ", $parte);
        $parteFinal[] = implode(" ", $parte2);
        $resultado[] = $parteFinal;
    }

print_r($resultado);
?>