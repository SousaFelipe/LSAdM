<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\Provedor;

use App\Repository\Provedor\TokenRepository;


class ProvedorRepository extends Repository
{
    public static function all()
    {
        return self::bind(Provedor::class)->all();
    }


    public static function find($provedorID)
    {
        $provedor = self::bind(Provedor::class)
            ->where('id', $provedorID)
            ->first();

        return self::pullTokens(array($provedor))[0];
    }


    public static function fetchByColaborador($provedorID, $colaboradorID)
    {
        return self::bind(Provedor::class)
            ->where('provedor', $provedorID)
            ->where('colaborador', $colaboradorID)
            ->get();
    }


    public static function pullTokens($provedores)
    {
        foreach ($provedores as $provedor) {
            $provedor['tokens'] = TokenRepository::fetchByProvedor($provedor->id);
        }
        return $provedores;
    }
}
