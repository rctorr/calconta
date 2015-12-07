<?php
  include("porcentaje.php");
  function isr($ingresos) {

    $resultado=porcentaje($ingresos, 10);

    return $resultado;
  }
?>
