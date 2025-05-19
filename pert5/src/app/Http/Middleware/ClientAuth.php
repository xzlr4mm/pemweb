<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearToken();
        $token = Cilent::where('api_token',$token)->first();
        if(!$client){
            return response()->json([
                'massage'=>'Unathorized'
            ],401);
        }
        $request->marge(['authenticated_client' => $client]);
        return $next($request);
    }
}
