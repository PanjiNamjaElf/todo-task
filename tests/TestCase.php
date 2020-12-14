<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $commands = ['config:clear', 'route:clear', 'view:clear', 'cache:clear'];

        foreach ($commands as $command) {
            $this->artisan($command);
        }
    }
}
