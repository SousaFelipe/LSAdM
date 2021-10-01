<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\SubSetor;


class SubSetorRepository extends Repository
{
    public static function findBySetor($provedorID, $setorID)
    {
        return self::bind(SubSetor::class)
            ->where('provedor', $provedorID)
            ->where('setor', $setorID)
            ->first();
    }
}