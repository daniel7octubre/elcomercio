<?php 

/**
 * Pregunta 01: 
 * reemplazo de caracteres: 'abcd' => 'bcde' 
 */

class ChangeString
{
    private $abecedario_1 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $abecedario_2 = [];

    // generamos el nuevo abecedario

    function __construct()
    {
        // ordenamos el nuevo abecedario
        
        $num_alfabeto = count($this->abecedario_1);

        for ($k=0; $k < $num_alfabeto ; $k++) { 
            if( ($k+1) < $num_alfabeto){
                $this->abecedario_2[] = $this->abecedario_1[$k+1];
            }
        }

        $this->abecedario_2[$num_alfabeto] = $this->abecedario_1[0]; 

        // completamos mayusculas para el reemplazo

		foreach ($this->abecedario_1 as $k_1 => $val_1) {
			$this->abecedario_1[] = strtoupper($val_1);
		}

		foreach ($this->abecedario_2 as $k_2 => $val_2) {
			$this->abecedario_2[] = strtoupper($val_2);
		}


    }

    // sugerido por php

    private function stro_replace($search, $replace, $subject)
    {
        return strtr( $subject, array_combine($search, $replace) );
    }

    // ejecutar

    public function build($texto='')
    {        
		$texto = $this->stro_replace($this->abecedario_1,$this->abecedario_2,$texto);
		return $texto;

    }
}

?>