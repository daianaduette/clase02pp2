<?php

/*en una empresa de viajes me dan la opcion de viajar a 
Bariloche o Ushuaia o Cataratas, informar si hace frio o calor
en la opcion seleccionada*/


$clima = rand (1,3) ;

echo "1 Bariloche";
echo "2 Ushuaia";
echo "3 Cataratas";


switch($clima){
    case 1: 
        echo "Hace Frio";
        break;
     case 2:
        echo "Hace Frio";
        break;
      case 3:
        echo "Hace Calor";     
        break;

}

?>