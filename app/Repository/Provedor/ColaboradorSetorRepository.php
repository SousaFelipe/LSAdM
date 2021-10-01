<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\ColaboradorSetor;


class ColaboradorSetorRepository extends Repository
{
    public static function fetchByColaborador($provedorID, $colaboradorID)
    {
        return self::bind(ColaboradorSetor::class)
            ->where('provedor', $provedorID)
            ->where('colaborador', $colaboradorID)
            ->get();
    }
}