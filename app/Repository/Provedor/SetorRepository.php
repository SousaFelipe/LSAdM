<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\Setor;


class SetorRepository extends Repository
{
    public static function findById($provedorID, $setorID)
    {
        return self::bind(Setor::class)
            ->where('provedor', $provedorID)
            ->where('id', $setorID)
            ->first();
    }
}