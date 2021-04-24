<?php

//obtener la edad informar si es mayor adolescente o menor de edad con switch
//niño-adolescente-mayor

$edad = rand (1,100);

echo "14 es un niño";
echo "17 es un adolescente";
echo "18 es mayor";

switch ($edad)
{
case 1:
case 2:
case 3:
case 4:
case 5:
case 6:
case 7:
case 8:
case 9:
case 10:
case 11:
case 12:
case 13:
case 14:
    echo "Es un niño";
    break;
case 15:
case 16:
case 17:
    echo "Es un adolescente";
    break;
 case 18:
    echo "Es mayor";
    break;

}

?>