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
        $config = m::mock('\Illuminate\Config\Repository');
        $files  = m::mock('\Illuminate\Filesystem\Filesystem');
        $path   = '/var/www/laravel/vendor';

        $components = array(
            'asset' => array(
                'AssetServiceProvider',
                'NoneExistClass',
            ),
            'foo' => array(
                'FooServiceProvider',
            ),
        );

        $added = array(
            "{$path}/orchestra/asset/src/AssetServiceProvider.php",
            "app/Foobar.php",
        );
        $missing  = array(
            "{$path}/orchestra/asset/src/NoneExistClass.php",
        );

        $config->shouldReceive('get')->once()->with('compile.files', array())
                ->andReturn(array(
                    "app/Foobar.php",
                ))
            ->shouldReceive('set')->once()->with('compile.files', $added)->andReturn(null);
        $files->shouldReceive('isDirectory')->once()
                ->with("{$path}/orchestra/asset")->andReturn(true)
            ->shouldReceive('isDirectory')->once()
                ->with("{$path}/orchestra/foo")->andReturn(false)
            ->shouldReceive('exists')->once()
                ->with("{$path}/orchestra/asset/src/AssetServiceProvider.php")->andReturn(true)
            ->shouldReceive('exists')->once()
                ->with("{$path}/orchestra/asset/src/NoneExistClass.php")->andReturn(false);

        $stub = new Compiler($config, $files, $path, $components);
        $compiled = $stub->run();

        $expected = new Fluent(array(
            'added'   => $added,
            'missing' => $missing,
        ));

        $this->assertEquals($expected, $compiled);
    }
}
