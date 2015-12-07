<?php
  /*
    suma-test2.php
  */

  include("suma.php"); /* llamamos al módulo suma para poder usarlo posteriormete */

  /* Casos de prueba para el módulo suma */
  echo "Verificando el módulo suma\n";
  echo suma(2, 7) . "= 9 \n";
  echo suma(2, 0) . "= 2 \n";
  echo suma(2, -7) . "= -5 \n";
  echo suma(2, 7.0) . "= 9 \n";
  echo suma(2, 7.5) . "= 9.5 \n";
?>
