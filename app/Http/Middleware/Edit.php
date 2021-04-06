<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Artist;
use Illuminate\Http\Request;

class Edit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = auth()->user()->id;

        $artistId = Artist::where('slug', $request->artist->slug)->first()->user_id;

        if ($userId !== $artistId) {
            return redirect()->back();
        }

        return $next($request);
    }
}
