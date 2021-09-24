<?php

namespace Skotner\Theme\Http\Middleware;

use View;
use Closure;
use Illuminate\Http\Request;

class ThemeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $theme)
    {
        View::getFinder()->setPaths(
            [
                config('theme.folder') .'/'. $theme,
            ]
        );

        return $next($request);
    }
}
