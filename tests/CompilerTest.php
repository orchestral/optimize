<?php namespace Orchestra\Optimize\TestCase;

use Mockery as m;
use Illuminate\Container\Container;
use Illuminate\Support\Fluent;
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
        $path       = '/var/www/laravel/vendor';
        $components = array(
            'asset' => array(
                'AssetServiceProvider',
                'NoneExistClass',
            ),
        );

        $succeed = array("{$path}/orchestra/asset/src/AssetServiceProvider.php");
        $failed  = array("{$path}/orchestra/asset/src/NoneExistClass.php");

        $config->shouldReceive('get')->once()->with('compile', array())->andReturn(array())
            ->shouldReceive('set')->once()->with('compile', $succeed)->andReturn(null);
        $files->shouldReceive('exists')->once()
                ->with("{$path}/orchestra/asset/src/AssetServiceProvider.php")->andReturn(true)
            ->shouldReceive('exists')->once()
                ->with("{$path}/orchestra/asset/src/NoneExistClass.php")->andReturn(false);
        $stub = new Compiler($config, $files, $path, $components);
        $compiled = $stub->run();

        $expected = new Fluent(array(
            'succeed' => $succeed,
            'failed'  => $failed,
        ));

        $this->assertEquals($expected, $compiled);
    }
}
