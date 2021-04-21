<?php

$numero1 = 10;
$numero2 = 20;
$numero3 = 30;

if($numero1 > $numero2){
    echo "El numero mayor de los tres es :" .$numero1;

}

if ($numero2 > $numero3){
    echo "El numero mayor de los tres es: " .$numero2;

}
if ($numero3 > $numero2 && $numero3 > $numero1){
    echo "El numero mayor de los tres es: " .$numero3;
}



?>