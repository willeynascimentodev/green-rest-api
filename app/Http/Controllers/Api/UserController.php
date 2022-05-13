<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $req)
    {
        $credentials = $req->only(['email', 'password']);
        if ( $token = auth('api')->attempt($credentials) ) {
            return $this->respondWithToken($token);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }

    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 1
        ]);
    }
}
