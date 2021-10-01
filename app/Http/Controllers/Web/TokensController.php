<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Provedor\TokenRepository;


class TokensController extends Controller
{
    public function listar(Request $request)
    {
        return response()->json([
            'tokens' => TokenRepository::fetchByProvedor($request->provedor)
        ]);
    }
}
