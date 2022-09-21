<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    
    $randPass = array();
    for($i=0; $i < $upper; $i++){
        array_push($randPass, chr(rand(65,90))) ;
    }

    for($i=0; $i < $lower; $i++){
       array_push($randPass, chr(rand(97, 122)));
    }

    for($i=0; $i < $numeric; $i++){
        array_push($randPass, rand(0,9));
    }

    for($i=0; $i < $other; $i++){
        array_push($randPass, chr(rand(33,63)));    
    }

    shuffle($randPass);
    
    foreach($randPass as $caracter){
        echo "$caracter";
    }

}

rand_Pass();
?>