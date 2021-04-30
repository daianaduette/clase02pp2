<?php

/*de tres numeros ingresados indicar el numero del medio 
o informar si no hay numero del medio
3,5, 7  número del medio =5 
3,7, 5	número del medio =5 
5,3, 7	número del medio =5 
5, 7,3	número del medio =5 
7,5,3	número del medio =5 
7,3, 5	número del medio =5 
7,7,7 no tiene  
7,7,5 no tiene 
5,7,5 no tiene */


$numero1 = 6;
$numero2 = 8;
$numero3 = 10;

$medio = 8;

echo "numero 1 : 6</br>";
echo "numero 2 : 8</br>";
echo "numero 3 : 10</br>";

if ($numero1 > $numero2)
{
  $medio = $numero1;
  echo "numero del medio es " .$numero1;
}
if ( $medio > $numero3)
{
    $medio = $numero3;
    echo "numero del medio es :" .$numero3;
}
else
{
 $medio = $numero2;
  echo "numero del medio es :" .$numero2;
}














?>