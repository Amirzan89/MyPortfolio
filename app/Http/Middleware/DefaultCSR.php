<?php
namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
class DefaultCSR
{
    private static $exceptPage = ['/sanctum/csrf-cookie', '/cv'];
    public function handle(Request $request, Closure $next){
        $path = '/' . ltrim($request->path(), '/');
        if ($request->header('Accept') !== 'application/json' && !in_array($path, self::$exceptPage)) {
            return response()->file(public_path() . '/index.html');
        }
        return $next($request);
    }
}