<?php 

/**
 * Pregunta 02:
 * Completar rango : [1,2,4] => [1,2,3,4]
 */

class CompleteRange
{
    
    public function build($arreglo=[])
    {
        $num_array = count($arreglo);

		$arreglo_completo = [];

		for ($i=$arreglo[0]; $i <= $arreglo[$num_array-1]; $i++) { 
			
			$arreglo_completo[] = $i;

		}

		return $arreglo_completo;
    }

}

?>