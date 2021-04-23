<?php

$numero1 = 10;
$numero2 = 20;
$numero3 = 30;



if($numero1 > $numero2 && $numero1 > $numero3)
{
      $numMayor = $numero1;
}

else
{
     if ($numero2 > $numero3)
     {
        $numMayor = $numero2;
     }
{
else
{
        $numMayor = $numero3;
}
  
}
echo "El numero mayor es :" .$numMayor;
?>