<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;

class HelloWorldControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
    }

    /** @test */
    public function same_test()
    {
        $response = $this->get('/');

        $response->assertSuccessful();
    }

    /** @test */
    public function can_get_response()
    {
        $response = $this->get(route('hello-world.get'));

        $response
            ->assertSuccessful()
            ->assertSee('hello');
    }
}
