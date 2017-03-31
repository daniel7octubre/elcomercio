<?php 

/**
 * Pregunta 03:
 * Filtro de parentesis : '(()' => '()'
 */

class ClearPar 
{
    public function build($texto='')
    {
        $texto = str_replace('()','p',$texto);

        $texto = preg_replace('/[^p]/','',$texto);

        $texto = str_replace('p','()',$texto);

        return $texto;
    }
}

?>