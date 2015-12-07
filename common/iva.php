<?php
include("porcentaje.php");
 function iva($op1){

   /*
   Descripción: suma el valor de op1 con op1 y regresa el resulado
   Párametros:
   op1 Es el primer operando de la suma
   op2 Es el segundo operando de la suma
   valor de regreso:
    Regresa un número resultado de la suma op1+op2
   */
   $resultado = porcentaje($op1,16);
   return $resultado;
 }
?>
