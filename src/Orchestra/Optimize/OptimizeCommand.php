<?php namespace Orchestra\Optimize;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

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
     * Compiler instance.
     *
     * @var Compiler
     */
    protected $compiler;

    /**
     * Construct a new instance.
     *
     * @param  Compiler   $compiler
     */
    public function __construct(Compiler $compiler)
    {
        parent::__construct();

        $this->compiler = $compiler;
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
        $compiled = $this->optimizer->compile();

        foreach ($compiled->failed as $file) {
            $this->comment("File not found: [{$file}]");
        }
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
