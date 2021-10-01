<?php
namespace App\Http\Controllers\API\V1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function frst(Request $request)
    {

    }



    public function user(Request $request)
    {
        if ($this->daniedAccess($request)) {
            return $this->unauthorized();
        }

        $user = auth()->user();

        unset($user->password);
        unset($user->created_at);
        unset($user->updated_at);
        unset($user->email_verified_at);
        unset($user->remember_token);

        return response()->json([ 'user' => $user ]);
    }



    public function csrf($json = true)
    {
        $sessionToken = $request->session()->token();

        return $json
            ? response()->json(['csrf' => $sessionToken])
            : $sessionToken;
    }
}
