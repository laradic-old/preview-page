<?php

namespace Laradic\PreviewPage;

use Laradic\Support\ServiceProvider;

/**
* The main service provider
*
* @author        Robin Radic
* @copyright  Copyright (c) 2015, Codex Project
* @license      http://mit-license.org MIT
*/
class PreviewPageServiceProvider extends ServiceProvider
{
    protected $dir = __DIR__;

    protected $configFiles = [ 'laradic.preview-page' ];

    protected $commands = [
        // Commands\SomeCommand::class
    ];

    protected $bindings = [

    ];

    protected $singletons = [

    ];

    protected $aliases = [

    ];

    public function boot(){
        $app = parent::boot();

        return $app;
    }

    public function register(){
        $app = parent::register();

        return $app;
    }
}
