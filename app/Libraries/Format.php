<?php
namespace App\Libraries;


class Format
{
    function telefone($numero)
    {
        if(strlen($numero) == 10) {
            $telefone = substr_replace($numero, '(', 0, 0);
            $telefone = substr_replace($telefone, '9', 3, 0);
            $telefone = substr_replace($telefone, ')', 3, 0);
        }
        else {
            $telefone = substr_replace($numero, '(', 0, 0);
            $telefone = substr_replace($telefone, ')', 3, 0);
        }

        return $telefone;
    }



    public static function cpf_cnpj($clean)
    {
        $doc = preg_replace("/[^0-9]/", "", $clean);
        $qtd = strlen($doc);

        if ($qtd >= 11) {

            if($qtd === 11 ) {
                $docFormatado = substr($doc, 0, 3) . '.' .
                                substr($doc, 3, 3) . '.' .
                                substr($doc, 6, 3) . '.' .
                                substr($doc, 9, 2);
            }
            else {
                $docFormatado = substr($doc, 0, 2) . '.' .
                                substr($doc, 2, 3) . '.' .
                                substr($doc, 5, 3) . '/' .
                                substr($doc, 8, 4) . '-' .
                                substr($doc, -2);
            }

            return $docFormatado;
        }

        return 'Documento invalido';
    }
}
