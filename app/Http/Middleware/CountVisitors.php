<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Luve Month and Year
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Checking data for this month
        $visitor = Visitor::where('month', $currentMonth)->where('year', $currentYear)->first();

        if ($visitor) {
            $visitor->increment('total');
        } else {
            // If not add new
            Visitor::create([
                'month' => $currentMonth,
                'year' => $currentYear,
                'total' => 1
            ]);
        }

        return $next($request);
    }
}
