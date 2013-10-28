<?php namespace Orchestra\Optimize;

use Illuminate\Console\Command;
use Orchestra\Support\Str;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class OptimizeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'orchestra:optimize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize the framework for better performance';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->addOptimizableClasses();
        $this->callOptimize();
    }

    /**
     * Add list of classes to be optimized.
     *
     * @return void
     */
    protected function addOptimizableClasses()
    {
        $laravel    = $this->getLaravel();
        $compile    = $laravel['config']->get('compile', array());
        $vendorPath = realpath($laravel['app.base'].'/vendor/');

        $components = array(
            "asset" => array(
                "Orchestra/Asset/AssetServiceProvider",
                "Orchestra/Asset/Container",
                "Orchestra/Asset/Environment",
            ),
        );

        foreach ($components as $name => $classes) {
            foreach ($classes as $class) {
                $compile[] = "{$vendorPath}/orchestra/{$name}/{$class}";
            }
        }

        $laravel['config']->set('compile', $compile);
    }

    /**
     * Call `php artisan optimize`.
     *
     * @return void
     */
    protected function callOptimize()
    {
        $this->call('optimize', array('--force'));
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array();
    }
}
