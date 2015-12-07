<?php
  // Iniciamos el uso de sesiones
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <h1>Calculadora contable</h1>
    <hr />
    <div id="calculadora">
      <?php
        /* Esto es para saber si estamos recibiendo un valor
           para el display o no por medio de la variable 'res' */
        if(isset($_GET['res'])) {
            $resultado = $_GET['res'];
        } else {
            $resultado = "00000000.00";
        }

        /* Esto es para saber si estamos recibiendo un valor
           de alguna de las teclas por medio de la variable 'val' */
        if(isset($_GET['val'])) {
            $valor = $_GET['val'];
            if($resultado == "00000000.00") {
                /* Si en el display hay 00000000.00 entonces remplazamos por
                   lo que tiene $valor */
                $resultado = $valor;
            } else {
                /* Si no hay 00000000.00 entonces tenemos que ir acumulando
                   los dígitos en el display */
                $resultado = $resultado . $valor; /* [       5].[3] => [      53] */
            }
        } else {
            $valor = "0";
        }

        /* Esto es para saber si hemos presionado una tecla de algún
           operador con la variable 'op' */
        if(isset($_GET['op'])) {
          /* SI hemos presionado una tecla de un operador */
          $oper = $_GET['op'];
          $oper1 = $_SESSION['oper1'];
          /* Vamos a procesar las acciones de cada una de las teclas de cada
             operador */
          if($oper == "clr") {
             $resultado = "00000000.00";
          } elseif($oper == "iva") {
              /* Importamos el módulo de la operación para el porciento */
              include("common/iva.php");

              /* Realizamos la operación */
              $resultado = iva($resultado);
          } elseif($oper == "eq") {
            /* Se realiza la acción para la tecla = */
            /*
              Realizar la operación guardada en $oper1 usando como 1er valor
              a $valor1 y como 2do valor a lo que hay en $resultado y hay que
              colocar el resultado en el display.
            */
            if($oper1 == 'suma') {
              /* Importamos el módulo de la operación para suma */
              include("common/suma.php");

              /* Pedimos del más allá el valor de $valor1 */
              $valor1 = $_SESSION['valor1'];

              /* Realizamos la operación */
              $resultado = suma($valor1, $resultado);
            }
            if($oper1 == 'resta') {
              /* Importamos el módulo de la operación para resta */
              include("common/resta.php");

              /* Pedimos del más allá el valor de $valor1 */
              $valor1 = $_SESSION['valor1'];

              /* Realizamos la operación */
              $resultado = resta($valor1, $resultado);
            }
            if($oper1 == 'porcen') {
              /* Importamos el módulo de la operación para el porciento */
              include("common/porcentaje.php");

              /* Pedimos del más allá el valor de $valor1 */
              $valor1 = $_SESSION['valor1'];

              /* Realizamos la operación */
              $resultado = porcentaje($valor1, $resultado);
            }
          } else {
            /* Si es es cualquier otra tecla de operación */

            /* Guardamos lo que hay en el display */
            $valor1 = $resultado;
            $_SESSION['valor1'] = $valor1;

            /* Reiniciar el valor del display */
            $resultado = "00000000.00";

            /* guardamos la operación a realizar cuando se presione la tecla = */
            $oper1 = $oper;
            $_SESSION['oper1'] = $oper1;
          }
        } else {
          /* NO hemos presionado una tecla de un operador */
          $oper = "";
        } /* Termina if */

      ?>
      <div id="display"><?php echo $resultado; ?></div>
      <div id="teclas">
        <div id="numeros">
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=7">7</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=8">8</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=9">9</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=4">4</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=5">5</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=6">6</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=1">1</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=2">2</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=3">3</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=0">0</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&val=.">.</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=clr">C</a></div>
        </div><!-- termina id="numeros" -->
        <div id="oper">
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=suma">+</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=sqrt">Sqrt</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=prom">Prom</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=resta">-</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=porcen">%</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=multi">x</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=iva">Iva</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=div">/</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=isr">Isr</a></div>
          <div class="tecla"><a href="index.php?res=<?php echo $resultado; ?>&op=eq">=</a></div>
        </div><!-- termina id="oper" -->
      </div><!-- termina id="teclas" -->
    </div><!-- termina id="calculadora" -->
  </body>
</html>
