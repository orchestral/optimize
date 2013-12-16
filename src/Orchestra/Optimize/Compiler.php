<?php namespace Orchestra\Optimize;

use Illuminate\Config\FileLoader;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Fluent;

class Compiler
{
    /**
     * Config instance.
     *
     * @var \Illuminate\Config\FileLoader
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
    protected $components = array();

    /**
     * Construct a new instance.
     *
     * @param  \Illuminate\Config\FileLoader        $config
     * @param  \Illuminate\Filesystem\Filesystem    $files
     * @param  string                               $path
     * @param  array                                $components
     */
    public function __construct(FileLoader $config, Filesystem $files, $path, array $components = array())
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
        $failed  = array();
        $compile = $this->config->get('compile', array());

        foreach ($this->components as $name => $classes) {
            foreach ($classes as $class) {
                $file = "{$this->path}/orchestra/{$name}/src/{$class}.php";

                if ($this->files->exists($file)) {
                    $compile[] = $file;
                } else {
                    $failed[] = $file;
                }
            }
        }

        $this->config->set('compile', $compile);

        return new Fluent(array(
            'succeed' => $compile,
            'failed'  => $failed,
        ));
    }
}
