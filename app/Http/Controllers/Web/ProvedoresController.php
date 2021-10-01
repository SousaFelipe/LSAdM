<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Provedor\ProvedorRepository;


class ProvedoresController extends Controller
{
    public function detalhes(Request $request)
    {
        $provedor = ProvedorRepository::find($request->id);

        return view('super.admin.provedores.detalhes', compact('provedor'));
    }



    public function listar(Request $request)
    {
        $provedores = ProvedorRepository::all();

        return response()->json([
            'provedores' => ProvedorRepository::pullTokens($provedores)
        ]);
    }



    public function buscar(Request $request)
    {
        return response()->json([
            'provedor' => ProvedorRepository::find($request->id)
        ]);
    }
}
