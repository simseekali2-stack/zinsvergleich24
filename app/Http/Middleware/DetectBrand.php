<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class DetectBrand
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $brands = config('brands');
        $activeBrand = reset($brands);

        config(['app.active_brand' => $activeBrand]);
        View::share('activeBrand', $activeBrand);

        return $next($request);
    }
}
