<?php

/*en una empresa de viajes me dan la opcion de viajar a 
Bariloche o Ushuaia o Cataratas, informar si hace frio o calor
en la opcion seleccionada*/


$clima = rand (1,3) ;

echo "1 Bariloche</br>";
echo "2 Ushuaia</br>";
echo "3 Cataratas</br>";


switch($clima){
    case 1: 
    case 2:
        echo "En Bariloche y Ushuaia : Hace Frio";
        break;
      case 3:
        echo "En Cataratas : Hace Calor";     
        break;

}

?>