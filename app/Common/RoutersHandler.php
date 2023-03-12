<?php
declare(strict_types=1);

namespace App\Common;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

class RoutersHandler
{
    public function __construct(private ?string $folderPath = null)
    {
    }
    function add(string $name, ?string $middleware = null): RouteRegistrar
    {
        $route = Route::prefix($name)->name($name . '/');
        if ($middleware) $route->middleware($middleware);
        $relativePath = $this->folderPath ? $this->folderPath . DIRECTORY_SEPARATOR . $name : $name;
        $route->group(\getRouterPath($relativePath));
        return $route;
    }
}
