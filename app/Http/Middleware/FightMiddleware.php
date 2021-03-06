<?php

namespace App\Http\Middleware;

use Closure;

class FightMiddleware
{
    public function handle($request, Closure $next)
    {
        $data = [
            ['name'=>'taro','mail'=>'taro@yamada'],
            ['name'=>'hanako','mail'=>'hanako@flower'],
            ['name'=>'sachiko','mail'=>'sachico@happy'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
