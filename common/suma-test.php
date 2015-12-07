<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  /*
    suma-test.php
  */

  include("suma.php"); /* llamamos al módulo suma para poder usarlo posteriormete */

  /* Casos de prueba para el módulo suma */
  echo "<h1>Verificando el módulo suma</h1>";
  echo suma(2, 7) . "= 9 <br/>";
  echo suma(2, 0) . "= 2 <br/>";
  echo suma(2, -7) . "= -5 <br/>";
  echo suma(2, 7.0) . "= 9 <br/>";
  echo suma(2, 7.5) . "= 9.5 <br/>";
?>
</body>
</html>
