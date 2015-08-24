<?php namespace Orchestra\Optimize;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\OutputInterface;

class OptimizeCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'orchestra:optimize {--force : Force the compiled class file to be written.}';

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
    public function handle()
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
        $collection = $this->compiler->run();

        if ($this->getOutput()->getVerbosity() >= OutputInterface::VERBOSITY_VERY_VERBOSE) {
            foreach ($collection->get('added') as $file) {
                $this->info("File added: [{$file}]");
            }
        }

         if ($this->getOutput()->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE) {
            foreach ($collection->get('missing') as $file) {
                $this->comment("File not found: [{$file}]");
            }
        }
    }

    /**
     * Call `php artisan optimize`.
     *
     * @return void
     */
    protected function callOptimize()
    {
        $this->call('optimize', ['--force' => $this->option('force')]);
    }
}
