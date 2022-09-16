<?php
$nombres = array('Stefan' , 'Antonio', 'Borja');
echo count($nombres) . "<br>";

echo implode(" " , $nombres) . "<br>";

asort($nombres);
foreach($nombres as $val){
    echo "$val\n";
}
?>