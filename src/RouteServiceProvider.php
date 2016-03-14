<?php

namespace Laradic\PreviewPage;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Laradic\PreviewPage';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $prefix = $this->app[ 'config' ][ 'preview-page.routes.prefix' ];
        $as = 'preview-page::';
        $router->group(compact('prefix', 'as'), function (Router $router) {
            $router->get('/', ['as' => 'index', function () {
                return view('preview-page::index');
            }]);
            $router->get('{bootswatch}', ['as' => 'theme', function ($bootswatch) {
                return view('preview-page::index', compact('bootswatch'));
            }]);
        });
    }
}
