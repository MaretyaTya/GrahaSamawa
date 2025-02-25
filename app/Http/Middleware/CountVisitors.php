<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountVisitors
{
    public function handle(Request $request, Closure $next)
    {
        $totalVisitors = Cache::get('total_visitors', 0);

        Cache::put('total_visitors', $totalVisitors + 1, now()->addDays(1));

        return $next($request);
    }
}
