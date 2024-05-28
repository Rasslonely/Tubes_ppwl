<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitors
{
    // public function handle(Request $request, Closure $next)
    // {
    //     $ip = $request->ip();
    //     $existingVisitor = Visitor::where('ip', $ip)->first();

    //     if (!$existingVisitor) {
    //         Visitor::create(['ip' => $ip]);
    //     }

    //     return $next($request);
    // }
}