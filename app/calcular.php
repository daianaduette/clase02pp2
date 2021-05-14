<?php
/*
 1 Funciòn : Sumar -Parametros : numero1 y numero2
 2 funciòn : Dividir-Parametros : numero1 y numero2
 3 Funciòn : Retornar si es cero : true o false -cero: true, no es cero: False
 4 Funciòn : Calcular -Parametros numero1, operador, numero2
 5 Funciòn : Mostrar resultado -Parametros : Resultado parametro o ingresado
 
 */


 function sumar($numero1,$numero2) // a la funcion le paso los parametros
{

$numero1;//variables
$numero2;

$resultado = $numero1 + $numero2; //resultado va a tener numero1 y numero2

return $resultado; // retorne resultado que va a ser numero1 + numero2
}

echo "El resultado de la suma de los dos numeros es: " .sumar(5 , 2);//coloco 2 numero para que me sume




function dividir($numero1,$numero2) // a la funcion le paso los parametros
{

$numero1;//variables
$numero2;

$resultado = $numero1 / $numero2; 

return $resultado; // retorne resultado que va a ser numero1 / numero2
}

echo "<br>El resultado de la division de dos numeros es: " .dividir(10 , 5);//coloco 2 numero para que me sume




function retornarSiEsCero ($numeroingresado)
{
    
    if($numeroingresado == 0)
    {
        return true;
    }

        else
        {
            return false;
        }
        echo "<br>El numeros es: " .retornarSiEsCero(0);//coloco un numero

}





$operador =  '/';

function Calcular($numero1, $numero2 , $operador)
{
switch ($operador)
{
    case '+' :
        $resultado = sumar($numero1,$numero2);
        mostrarResultado($resultado);
        break;


     case '/' : 
        $resultado = dividir($numero1, $numero2);
        mostrarResultado($resultado);
         break;

        default:
            echo "error";
        
}

}

function mostrarResultado($resultado)
{
    echo "<br>el resultado es :" .$resultado;
}

Calcular (3, 2, "+");



?>