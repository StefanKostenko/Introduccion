<?php
    $personas = array("Stefan" => "alumno", "Rodrigo" => "maestro", "Laura" => "secretaria" , "Antonio" => "alumno");

    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    uasort($personas, 'cmp');
    print_r($personas);
?>