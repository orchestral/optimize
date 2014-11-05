<?php namespace Orchestra\Optimize;

use Illuminate\Support\Fluent;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Config\Repository;

class Compiler
{
    /**
     * Config instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Bath vendor path.
     *
     * @var string
     */
    protected $path = '';

    /**
     * List of classes/components to be compiled.
     *
     * @var array
     */
    protected $components = [];

    /**
     * Arrange priority for compilation.
     *
     * @var array
     */
    protected $arrange = [
        'translation',
        'support',
        'kernel',
        'messages',
        'memory',
        'facile',
        'notifier',
        'debug',
        'model',
        'asset',
        'auth',
        'extension',
        'html',
        'http',
        'resources',
        'view',
        'warden',
        'widget',
        'foundation',
    ];

    /**
     * Files collection.
     *
     * @var array
     */
    protected $collection = [
        'added'   => [],
        'missing' => [],
    ];

    /**
     * Construct a new instance.
     *
     * @param  \Illuminate\Contracts\Config\Repository  $config
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @param  string  $path
     * @param  array  $components
     */
    public function __construct(Repository $config, Filesystem $files, $path, array $components = [])
    {
        $this->config = $config;
        $this->files = $files;
        $this->path = $path;
        $this->components = $components;
    }

    /**
     * Run compile optimization list.
     *
     * @return \Illuminate\Support\Fluent
     */
    public function run()
    {
        // Run compilation based on class dependencies.
        $this->runCompilationByArrangedPriority();

        // Run remaining components (if any).
        foreach ($this->components as $name => $classes) {
            $this->compileGroupClasses($name, $classes);
        }

        // Append application file to the bottom.
        $original = $this->config->get('compile.files', array());

        foreach ($original as $class) {
            $this->collection['added'][] = $class;
        }

        $this->config->set('compile.files', $this->collection['added']);

        return new Fluent([
            'added'   => $this->collection['added'],
            'missing' => $this->collection['missing'],
        ]);
    }

    /**
     * Compilation should be appended by priority to avoid class redeclared
     * issue.
     *
     * @return void
     */
    protected function runCompilationByArrangedPriority()
    {
        foreach ($this->arrange as $name) {
            if (! isset($this->components[$name])) {
                continue;
            }

            $classes = $this->components[$name];

            $this->compileGroupClasses($name, $classes);

            unset($this->components[$name]);
        }
    }

    /**
     * Compile classes by group.
     *
     * @param  string  $name
     * @param  array   $classes
     * @return void
     */
    protected function compileGroupClasses($name, array $classes)
    {
        $path = "{$this->path}/orchestra/{$name}";

        if (! $this->files->isDirectory($path)) {
            return ;
        }

        foreach ($classes as $class) {
            $file = "{$path}/src/{$class}.php";

            if ($this->files->exists($file)) {
                $this->collection['added'][] = $file;
            } else {
                $this->collection['missing'][] = $file;
            }
        }
    }
}
