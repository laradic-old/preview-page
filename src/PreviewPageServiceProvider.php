<?php

namespace Laradic\PreviewPage;

use Laradic\Support\ServiceProvider;

/**
 * The main service provider
 *
 * @author        Robin Radic
 * @copyright     Copyright (c) 2015, Codex Project
 * @license       http://mit-license.org MIT
 */
class PreviewPageServiceProvider extends ServiceProvider
{
    protected $dir = __DIR__;

    protected $configFiles = [ 'preview-page' ];

    protected $viewDirs = [ 'views' => 'preview-page' ];

    protected $singletons = [
        'preview-page' => Factory::class,
    ];

    public function register()
    {
        $app = parent::register();

        if ($app[ 'config' ][ 'preview-page.routes.enabled' ]) {
            $this->app->register(RouteServiceProvider::class);
        }

        return $app;
    }
}
