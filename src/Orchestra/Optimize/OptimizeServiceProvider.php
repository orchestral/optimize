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
        $this->app->bindShared('orchestra.commands.optimize', function () {
            $components = require __DIR__."/compile.php";
            return new OptimizeCommand($components);
        });

        $this->commands('orchestra.commands.optimize');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('orchestra.commands.optimize');
    }
}
