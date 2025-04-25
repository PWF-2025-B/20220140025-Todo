<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testAppEnv()
    {
        if(App::environment(['testing', 'prod', 'dev'])){
            // kode program kita
            self::assertTrue(true);
        }
    }
}
