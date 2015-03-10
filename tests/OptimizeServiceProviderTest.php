<?php namespace Orchestra\Optimize\TestCase;

use Mockery as m;
use Illuminate\Container\Container;
use Orchestra\Optimize\OptimizeServiceProvider;

class OptimizeServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Application instance.
     *
     * @var \Illuminate\Container\Container
     */
    protected $app;

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $this->app = new Container();
    }

    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        unset($this->app);
        m::close();
    }

    /**
     * Test Orchestra\Optimize\OptimizeServiceProvider::register() method.
     *
     * @test
     */
    public function testRegisterMethod()
    {
        $app              = $this->app;
        $app['config']    = $config    = m::mock('\Illuminate\Contracts\Config\Repository');
        $app['events']    = $events    = m::mock('\Illuminate\Contracts\Events\Dispatcher');
        $app['files']     = $files     = m::mock('\Illuminate\Filesystem\Filesystem');
        $app['path.base'] = '/var/www/laravel';

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
        $stub = new OptimizeServiceProvider($this->app);

        $expected = [
            'orchestra.commands.optimize',
            'orchestra.optimize',
        ];

        $this->assertEquals($expected, $stub->provides());
    }
}
