<?php

test('example', function () {
    expect(true)->toBeTrue();
});
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testEnv()
    {
        $appName = env("YOUTUBE");

        self::assertEquals("Programmer Zaman Now", $appName);
    }
}
