<?php

	function porcentaje($op1, $op2) {
		/*
			Descripción: se multplican los valores de los números op1 y op2 y se divide entre 100
			 y regresa el resultado

			Parametros:
			op1: Es el número al que le quieres aplicar el porcentaje
			op2: Es el porcentaje que quieres hacer

			Valor de regreso:
				Regresa un número resultado de la operación (multiplicación y division) de op1+op2
		*/

		$resultado = $op1 * $op2/100;

		return $resultado;
	}
?>