<?php namespace Orchestra\Optimize;

use Illuminate\Support\ServiceProvider;

class OptimizeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var boolean
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCompiler();
        $this->registerCommand();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    protected function registerCommand()
    {
        $this->app->bindShared('orchestra.commands.optimize', function ($app) {
            return new OptimizeCommand($app['orchestra.optimize']);
        });

        $this->commands('orchestra.commands.optimize');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    protected function registerCompiler()
    {
        $this->app->bindShared('orchestra.optimize', function ($app) {
            $components = $app['files']->getRequire(__DIR__."/compile.php");

            return new Compiler($app['config'], $app['files'], $app['path.base'], $components);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('orchestra.commands.optimize', 'orchestra.optimize');
    }
}
