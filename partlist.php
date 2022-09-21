<?php
$cadenas = array("Seguro", "que", "apruebo", "esta", "asignatura");

for($i=0; $i < count($cadenas); $i++){
    for($j=1; $j < count($cadenas); $j++){
        $parte = array_slice($cadenas, 0, $i);
        $parte2 = array_slice($cadenas, $i, $j);

        print_r($parte);
        echo "<br>";
        print_r($parte2);
        echo "<br>";
    }
}
?>