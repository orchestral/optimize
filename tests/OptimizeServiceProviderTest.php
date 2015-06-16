<?php namespace Orchestra\Optimize\TestCase;

use Mockery as m;
use Illuminate\Container\Container;
use Orchestra\Optimize\OptimizeServiceProvider;

class OptimizeServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        m::close();
    }

    /**
     * Test Orchestra\Optimize\OptimizeServiceProvider::register() method.
     *
     * @test
     */
    public function testRegisterMethod()
    {
        $app    = m::mock('\Illuminate\Container\Container[basePath]');
        $config = m::mock('\Illuminate\Contracts\Config\Repository');
        $events = m::mock('\Illuminate\Contracts\Events\Dispatcher');
        $files  = m::mock('\Illuminate\Filesystem\Filesystem');

        $app->instance('config', $config);
        $app->instance('events', $events);
        $app->instance('files', $files);

        $app->shouldReceive('basePath')->once()->andReturn('/var/www/laravel');

        $files->shouldReceive('getRequire')->once()->andReturn([]);
        $events->shouldReceive('listen')->once()->with('artisan.start', m::type('Closure'))->andReturn(null);

        $stub = new OptimizeServiceProvider($app);

        $stub->register();

        $this->assertInstanceOf('\Orchestra\Optimize\OptimizeCommand', $app['orchestra.commands.optimize']);
    }

    /**
     * Test Orchestra\Optimize\OptimizeServiceProvider::provides() method.
     *
     * @test
     */
    public function testProvidesMethod()
    {
        $stub = new OptimizeServiceProvider(null);

        $expected = [
            'orchestra.commands.optimize',
            'orchestra.optimize',
        ];

        $this->assertEquals($expected, $stub->provides());
    }
}
