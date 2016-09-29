<?php namespace {{vendor|studly_case}}\{{slug|studly_case}}Module;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class {{slug|studly_case}}ModuleServiceProvider
 *
{{docblock}}
 * @package   {{vendor|studly_case}}\{{slug|studly_case}}Module
 */

class {{slug|studly_case}}ModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];

    protected $routes = [];

    protected $bindings = [];

    protected $middleware = [];

    protected $listeners = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];

    protected $commands = [];

    public function register()
    {
    }

    public function map()
    {
    }
}
