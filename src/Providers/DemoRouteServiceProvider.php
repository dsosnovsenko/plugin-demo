<?php
namespace Demo\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class DemoRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('styles', 'Demo\Controllers\ContentController@showStyles');
    }
}