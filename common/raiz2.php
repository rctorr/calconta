<?php
function raiz($n){ 
    /*Descripcion de la funcion: RAIZ ES EL RESULTADO DE ELEVAR A LA DOBLE POTENCIA EL VALOR $n PARA REGRESAR EL RESULTADO.
    PARAMETROS:
    $n Es el valor total del que se obtendra la raiz cuadrada
    
    Valor de regreso:
Regresa un número resultado que elevandolo a la 2 potencia nos de el valor de $n*/
    if($n >= 0){ /*Condicion para que el valor de $n en la regla numerica sea solo para que compruebe si el valor colocado es mayor o igual a 0, entonces podra hacer la funcion de calcular la raiz cuadrada.*/
        $total = sqrt($n);
        return $total;
    }else {/*Si el valor de $n no es mayor o igual a 0 entonces la funcion te regresara el valor negativo de -1 */
        return -1;/*El valor regresado de -1 es para que no haya conflicto con valores negativos y positivos puesto que el valor que sea inferior a 0 se manejara como error*/
    }
}


?>