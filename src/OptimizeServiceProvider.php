<?php namespace Orchestra\Optimize;

use Illuminate\Support\ServiceProvider;

class OptimizeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
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
        $this->app->singleton('orchestra.commands.optimize', function ($app) {
            return new OptimizeCommand($app->make('orchestra.optimize'));
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
        $this->app->singleton('orchestra.optimize', function ($app) {
            $files = $app->make('files');
            $components = $files->getRequire(__DIR__.'/compile.php');
            $path = realpath($app->basePath().'/vendor');

            return new Compiler($app->make('config'), $files, $path, $components);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['orchestra.commands.optimize', 'orchestra.optimize'];
    }
}
