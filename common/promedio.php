<?php


  function promedio ($total, $n){
    $suma = 0;
    /*Definimos $suma como 0 para que se sume cada uno de los valores de total */
    if($n>=2) {
          for($i=0; $i<$n; $i+=1){ /*Se utiliza for para que sume*/
        $suma = $suma + $total[$i];
      }
      $resultado = $suma/$n;
      return $resultado;
    } else {
      echo "Los elementos no son suficientes";
    }

}

/*----- Descripción: suma el valor los números de op1 con op2 y regresa el resultado
op1: es el primer operando de la suma
op2: es el segundo operando de la suma
Valor de regreso: Regresa un número resultado de op1 + op2 ----*/



  /*----NOTAS------
  Precedencia de operaciones: primero se hacen divisiones y multiplicaciones, entonces luego se suma-------------------*/
?>
