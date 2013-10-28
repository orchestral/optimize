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
     * List of Classes/Components to be compiled.
     *
     * @var array
     */
    protected $components = array();

    /**
     * Construct a new instance.
     *
     * @param  array   $components
     */
    public function __construct(array $components = array())
    {
        parent::__construct();

        $this->components = $components;
    }

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
        $files      = $laravel['files'];
        $compile    = $laravel['config']->get('compile', array());
        $vendorPath = realpath($laravel['path.base'].'/vendor/');

        foreach ($this->components as $name => $classes) {
            foreach ($classes as $class) {
                $file = "{$vendorPath}/orchestra/{$name}/src/{$class}.php";

                if ($files->exists($file)) {
                    $compile[] = $file;
                } else {
                    $this->info("File not found: [{$file}]");
                }
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
        $force = $this->option('force');
        $this->call('optimize', array('--force' => $force));
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('force', null, InputOption::VALUE_NONE, 'Force the compiled class file to be written.'),
        );
    }
}
