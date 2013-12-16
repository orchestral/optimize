<?php namespace Orchestra\Optimize\TestCase;

use Mockery as m;
use Illuminate\Container\Container;
use Orchestra\Optimize\Compiler;

class CompilerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        m::close();
    }

    /**
     * Test \Orchestra\Optimize\Compiler::run() method.
     *
     * @test
     */
    public function testRunMethod()
    {
        $config     = m::mock('\Illuminate\Config\FileLoader');
        $files      = m::mock('\Illuminate\Filesystem\Filesystem');
        $path       = '/var/www/laravel';
        $components = array();

        $config->shouldReceive('get')->once()->with('compile', array())->andReturn(array())
            ->shouldReceive('set')->once()->with('compile', array())->andReturn(null);

        $stub = new Compiler($config, $files, $path, $components);
        $stub->run();
    }
}
