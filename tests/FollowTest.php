<?php
namespace Smartisan\Follow\Test;

use Orchestra\Testbench\TestCase;

class FollowTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->artisan('migrate', [
            '--database' => 'connect',
            '--path' => '../tests/database/migrations',
        ]);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['path.base'] = __DIR__ . '/../src';
        $app['config']->set('database.default', 'connect');
        $app['config']->set('database.connections.connect', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return ['Smartisan\Follow\FollowServiceProvider'];
    }
}