<?php

namespace Nowakjestem\Phorums\Tests;

use Orchestra\Testbench\TestCase;
use Nowakjestem\Phorums\PhorumsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PhorumsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
