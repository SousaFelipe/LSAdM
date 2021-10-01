<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\Colaborador;


class ColaboradorRepository extends Repository
{
    public static function findById($provedorID, $colaboradorID)
    {
        return self::bind(Colaborador::class)
            ->where('provedor', $provedorID)
            ->where('id', $colaboradorID)
            ->first();
    }
}