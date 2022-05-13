<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Exception;

class ApiRoute extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch(TokenInvalidException $e) {
            return response()->json(['error' => 'The token is not valid'], 401);
        } catch(TokenExpiredException $e) {
            return response()->json(['error' => 'The token has been expired'], 401);
        } catch (Exception $e){
            return response()->json(['error' => 'No token provided'], 401);
        }
        
        return $next($request);
    }
}
