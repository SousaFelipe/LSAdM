<?php
namespace App\Http\Controllers\API\V1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Provedor\TokenRepository;


class TokensController extends Controller
{
    public function ativos(Request $request)
    {
        return response()->json([
            'tokens' => TokenRepository::fetchAtivos()
        ]);
    }
}
